<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap Javascript-->
    <script src="bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Icons CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<title>Dettaglio Prodotto</title>

	<style type="text/css">
		
		#icone{
      	font-size: 30px;
      }

	</style>
</head>
<body>
	
		

		

		<?php 
			$host = "localhost";
		    $user = "root";
		    $password = "";
			$db="fabianomazzashop";
			$connessione = new mysqli($host, $user, $password, $db);
			$idprod=1;

			
			if ($connessione->connect_errno) {
				echo "Connessione fallita: ". $connessione->connect_error . ".";
			    exit();
			}
			session_start();
			$email1 = $_SESSION['login'];
			include('header.php'); 
				
			if (isset($email1)) {
				$query="SELECT nome FROM utenti WHERE email = '$email1'";	
				$ris_query = $connessione->query($query);
				
			?>
			<div class="container">
			<hr>
		<?php

				
				
				

				$id = $_GET['idprod'];


				
				$query="SELECT * FROM prodotti WHERE idprod = $id";
				
				
				
				$ris_query = $connessione->query($query);

		        if ($ris_query->num_rows > 0) {

		        	$riga = $ris_query->fetch_assoc();
		           
		            
		        }

		        
			?>
		<div class="row" style="margin-top: 5%;">
			<div class="col-sm-8">
				<?php echo ' <img style="background-size:cover; background-color:#ededed" class="img-fluid" src="' . $riga['immagine'] . ' "> ';  ?>
				
				
			</div>

			<div class="col-sm-4 text-center" style="margin-top: 2%;">
				<h1 style="font-family: 'Times New Roman', serif;"><?php echo $riga['descrizione']; ?></h1>
				<p style="font-family: 'Times New Roman', serif; margin-bottom: 8%;"><?php echo $riga['prezzo']; ?>$</p>

				<form method="post" required>

					<input type="submit" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off" value="35" checked>
					<label class="btn btn-outline-danger" for="danger-outlined">35</label>

					<input type="submit" class="btn-check" name="options-outlined" id="danger-outlined1" autocomplete="off" value="36" checked>
					<label class="btn btn-outline-danger" for="danger-outlined1" >36</label>

					<input type="submit" class="btn-check" name="options-outlined" id="danger-outlined2" autocomplete="off" value="37"  checked>
					<label class="btn btn-outline-danger" for="danger-outlined2" >37</label>

					<input type="submit" class="btn-check" name="options-outlined" id="danger-outlined3" autocomplete="off" value="38" checked>
					<label class="btn btn-outline-danger" for="danger-outlined3">38</label>	

					<input type="submit" class="btn-check" name="options-outlined" id="danger-outlined4" autocomplete="off" value="39" checked>
					<label class="btn btn-outline-danger" for="danger-outlined4" >39</label>

					<input type="submit" class="btn-check" name="options-outlined" id="danger-outlined5" autocomplete="off" value="40" checked>
					<label class="btn btn-outline-danger" for="danger-outlined5" >40</label>
					<br><br>

					<input type="submit" class="btn-check" name="options-outlined" id="danger-outlined6" autocomplete="off" value="41" checked>
					<label class="btn btn-outline-danger" for="danger-outlined6" >41</label>

					<input type="submit" class="btn-check" name="options-outlined" id="danger-outlined7" autocomplete="off"  value="42" checked>
					<label class="btn btn-outline-danger" for="danger-outlined7" >42</label>

					<input type="submit" class="btn-check" name="options-outlined" id="danger-outlined8" autocomplete="off" value="43" checked>
					<label class="btn btn-outline-danger" for="danger-outlined8" >43</label>

					<input type="submit" class="btn-check" name="options-outlined" id="danger-outlined9" autocomplete="off" value="44" checked>
					<label class="btn btn-outline-danger" for="danger-outlined9" >44</label>

					<input type="submit" class="btn-check" name="options-outlined" id="danger-outlined10" autocomplete="off" value="45" checked>
					<label class="btn btn-outline-danger" for="danger-outlined10" >45</label>

					<input type="submit" class="btn-check" name="options-outlined" id="danger-outlined11" autocomplete="off" value="46" checked>
					<label class="btn btn-outline-danger" for="danger-outlined11" >46</label><br><br>


					<div class='input-group mb-3' style="margin-left: 35%;">
	                    <button onclick='op(-1);' class='btn btn-outline-danger' type='button'><i class='bi bi-dash'></i></button>
	                    <input type='text' id='testo' size='1' readonly value='1' name='quantita'>
	                    <button onclick='op(1);'class='btn btn-outline-danger' type='button'><i class='bi bi-plus-lg'></i></button>
	                 </div>
				
					<button class="btn btn-info btn-lg btn-block" style="background-color: black; color: white; border-color: black; border-radius: 40px; margin: 2%; margin-top:10%; padding-left: 13%; padding-right: 13%; padding-top: 3%; padding-bottom: 3%;" name="carrello" type="submit">Aggiungi al carrello</button>
					<button class="btn btn-info btn-lg btn-block" style="background-color: white; color: black; border-color: black; border-radius: 40px; margin: 2%;  padding-left: 13%; padding-right: 13%; padding-top: 3%; padding-bottom: 3%;" name="preferiti" type="submit">Aggiungi ai preferiti</button>
					

				</form>

				<script type="text/javascript">
			          function op(i) {
			              var initialValue=1;
			              initialValue=parseInt(document.getElementById('testo').value);
			              if(initialValue>=1){
			                initialValue+=i;
			                document.getElementById('testo').value = initialValue;
			              }
			              if(initialValue<1){
			                var initialValue=1;
			                document.getElementById('testo').value = initialValue;
			              }
			          }
			    </script>
				
				<?php 	
				if (isset($_POST['options-outlined'])) {
						$taglia = $_POST['options-outlined'];
						echo 'taglia selezionata: ' . $taglia;
					}





					if (isset($_POST['carrello'])) {

						$query="SELECT * FROM carrello WHERE email = '$email1'";
						$ris_query = $connessione->query($query);
				       	$quant=0;
				        
				           
				         if ($ris_query->num_rows > 0) {
		        			$riga = $ris_query->fetch_assoc();
		        			$idcar=$riga['idcarr'];	


		        					            
		       			 }

		       			 if ($ris_query->num_rows == 0) {
							$query2="INSERT INTO carrello (dataCarr, email) VALUES (NOW(),'$email1')";
							$ris_query2= $connessione->query($query2);
							$query6="SELECT * FROM carrello WHERE email = '$email1'";
							$ris_query6= $connessione->query($query6);
							$riga6 = $ris_query6->fetch_assoc();
		        			$idcar=$riga6['idcarr'];			        			
						}
						
						$quant = $_POST['quantita'];
						$query3="SELECT quantita FROM dettaglio WHERE idcarr = '$idcar' AND idprod='$id'";
						$ris_query3 = $connessione->query($query3);
						if ($ris_query3->num_rows > 0) {
		        			$riga3 = $ris_query3->fetch_assoc();
		        			$quant += $_POST['quantita'];	
		        			$query4="UPDATE dettaglio SET quantita=$quant WHERE idcarr='$idcar' AND idprod='$id'";	 
		        			$ris_query4 = $connessione->query($query4); 
		        			 echo '<div class="alert alert-success" role="alert" style="margin-top:5%;">Prodotto aggiungo al carrello</div>';
		        			
						}
						else{
		       			 	$query5="INSERT INTO dettaglio (quantita, idprod, idcarr) VALUES ($quant, '$id', '$idcar')";
							$ris_query5 = $connessione->query($query5);
							 echo '<div class="alert alert-success" role="alert" style="margin-top:5%;">Prodotto aggiungo al carrello</div>';

		       			 }




					}

					 
					
			

					if (isset($_POST['preferiti'])) {
						$query="SELECT * FROM preferiti WHERE email = '$email1'";
						$ris_query = $connessione->query($query);
				       	
				        
				           
				         if ($ris_query->num_rows > 0) {
		        			$riga = $ris_query->fetch_assoc();
		        			$idpref=$riga['idpref'];	


		        					            
		       			 }

		       			 if ($ris_query->num_rows == 0) {
							$query2="INSERT INTO preferiti (email) VALUES ('$email1')";
							$ris_query2= $connessione->query($query2);
							$query6="SELECT * FROM preferiti WHERE email = '$email1'";
							$ris_query6= $connessione->query($query6);
							$riga6 = $ris_query6->fetch_assoc();
		        			$idpref=$riga6['idpref'];			        			
						}
						
						
						$query3="SELECT idprod FROM dettagliopref WHERE idpref = '$idpref' AND idprod='$id'";
						$ris_query3 = $connessione->query($query3);
						if ($ris_query3->num_rows > 0) {
		        			echo '<div class="alert alert-danger" role="alert" style="margin-top:5%;">Il prodotto è già presente nei preferiti</div>';
		        			
						}
						else{
		       			 	$query5="INSERT INTO dettagliopref (idprod, idpref) VALUES ('$id', '$idpref')";
							$ris_query5 = $connessione->query($query5);
							 echo '<div class="alert alert-success" role="alert" style="margin-top:5%;">Prodotto aggiungo ai preferiti</div>';

		       			 }
					}

				
						
				?>
				
			</div>
		</div>
	</div>

	<?php
		echo '<p style="margin-top:10%;"></p>';
		 include('footer.php'); ?>

	<?php } ?>
 	
		


	
	

</body>
</html>

