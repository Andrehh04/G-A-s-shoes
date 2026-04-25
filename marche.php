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
	<title>Marche</title>

		<style type="text/css">
		
		#icone{
      	font-size: 30px;
      }

       #pro{
      	font-family: 'Times New Roman', serif; 
      	font-size: 16px;     	
      }

      #pro:hover{
      	border: 1px solid black;
      }
  </style>
</head>
<body>
	<?php 
			session_start();
			$host = "localhost";
		    $user = "root";
		    $password = "";
			$db="fabianomazzashop";
			$connessione = new mysqli($host, $user, $password, $db);
			if ($connessione->connect_errno) {
				echo "Connessione fallita: ". $connessione->connect_error . ".";
			    exit();
			}
			
			$email1 = $_SESSION['login'];
			include('header.php'); 
				
			if (isset($email1)) {
				$query="SELECT nome FROM utenti WHERE email = '$email1'";	
				$ris_query = $connessione->query($query);
				
			?>
			<div class="container">
			<hr>
				<?php				

					$marca = $_GET['marca'];


					
					$query="SELECT * FROM prodotti WHERE marca = '$marca'";
					$ris_query = $connessione->query($query);

				?>	        

					<div class="row">
			        	<div class="col-sm-8">
							<p style="margin-top: 5%; margin-bottom: 5%; font-size: 45px;  font-family: 'Times New Roman', serif;"><b>Novità: <font style="text-transform: uppercase;"><?php echo $marca ?></font></b></p>
						</div>
					</div>

			        <div class="row">			        	

			        <?php

			        while($riga = $ris_query->fetch_assoc())
			        	{
			        		$idprod=$riga['idprod'];
			        		echo'<div id="pro" class="col-3"><a href="prodotto.php?idprod=' . $idprod .'"><img style="background-color:#ededed;" src="' . $riga['immagine'] . ' " class="d-block w-100" alt="."></a><br><p><b>'. $riga['marca'] . '</b> ' . $riga['descrizione'] . '<br><b>' . $riga['prezzo'] . '$</b></p></div>';
			        	}	

			        	 
			                
				?>
				</div>
			</div>

		<?php include('footer.php'); } ?>






</body>
</html>