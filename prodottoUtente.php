<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
			
			include('header.php'); 
				
			
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

		        $connessione->close();
			?>
		<div class="row" style="margin-top: 5%;">
			<div class="col-sm-8">
				<?php echo ' <img style="background-size:cover; background-color:#ededed" class="img-fluid" src="' . $riga['immagine'] . ' "> ';  ?>
				
				
			</div>
			<div class="col-sm-4 text-center" style="margin-top: 2%;">
				<h1 style="font-family: 'Times New Roman', serif;"><?php echo $riga['descrizione']; ?></h1>
				<p style="font-family: 'Times New Roman', serif; margin-bottom: 8%;"><?php echo $riga['prezzo']; ?>$</p>

				
				<form method="post">

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
					<label class="btn btn-outline-danger" for="danger-outlined11" >46</label>


					<button type="button" class="btn btn-primary" class="btn btn-info btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color: black; color: white; border-color: black; border-radius: 40px; margin: 2%; margin-top:10%; padding-left: 18%; padding-right: 18%; padding-top: 3%; padding-bottom: 3%;" name="carrello" type="submit">Aggiungi al carrello</button>
					<button type="button" class="btn btn-primary" class="btn btn-info btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color: white; color: black; border-color: black; border-radius: 40px; margin: 2%; padding-left: 18%; padding-right: 18%; padding-top: 3%; padding-bottom: 3%;" name="preferiti" type="submit">Aggiungi ai preferiti </button>
				</form>
				
				<?php 					
					if (isset($_POST['options-outlined'])) {
						$taglia = $_POST['options-outlined'];
						echo "Taglia selezionata: " . $taglia . "<br>";					}

				?>
				
			</div>
		</div>
	</div>

	<?php
		echo '<p style="margin-top:10%;"></p>';
		 include('footer.php'); ?>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Attenzione</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Devi prima accedere!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Chiudi</button>
        <a href="accesso.php"><button type="button" class="btn btn-outline-danger">Accedi</button></a>
      </div>
    </div>
  </div>
</div>

</body>
</html