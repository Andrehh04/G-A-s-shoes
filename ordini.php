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
	<title>Ordini</title>
</head>
<body>
	<?php 
		$host = "localhost";
	    $user = "root";
	    $password = "";
		$db="fabianomazzashop";
		$connessione = new mysqli($host, $user, $password, $db);
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
			if ($ris_query->num_rows > 0) {

		        $riga = $ris_query->fetch_assoc();	
			}	
		?>


			
				<div class=" container">
					<?php
						$query11="SELECT  dettaglioord.idord, dataOrdine FROM dettaglioord INNER JOIN ordini ON dettaglioord.idord = ordini.idord WHERE email='$email1' GROUP BY dettaglioord.idord";
						$ris_query11 = $connessione->query($query11);
						if ($ris_query11->num_rows > 0) {
							echo'<div class="row"><hr><div class="col-sm-12" align="center"><h2 style="font-family: Times New Roman, serif;">Ordini Effettuati</h2></div></div>';
						
						
							while ($riga11 = $ris_query11->fetch_assoc()) {
								$dataord=$riga11['dataOrdine'];
								$idord = $riga11['idord'];
								$query111="SELECT quant, idp FROM dettaglioord WHERE idord=$idord";
								$ris_query111 = $connessione->query($query111);
								
								echo '<hr> <b>Data ordine: </b>' . $dataord . '<br>';
								while ($riga111 = $ris_query111->fetch_assoc()) {
									$idprodotto=$riga111['idp'];
									$quant1=$riga111['quant'];
									$query12="SELECT descrizione, prezzo, marca, immagine FROM prodotti WHERE idprod=$idprodotto";
									$ris_query12 = $connessione->query($query12);
									while ($riga12=$ris_query12->fetch_assoc()) {
										echo'<div class="row"><div class="col-sm-2"><img src="' . $riga12['immagine'] . '" width="150px" alt="."></div><div class="col-sm-4"><br><br><p class="text-center" style="font-family: Times New Roman, serif; font-size:24px;"><b>'. $riga12['marca'] . '</b> ' . $riga12['descrizione'] . '</div>' . '<div class="col-sm-3"><br><br><p class="text-center" style="font-family: Times New Roman, serif; font-size:20px;">'. 'Quantità selezionata: ' . $quant1 . '</p></div><div class="col-sm-3"><br><br><p class="text-center" style="font-family: Times New Roman, serif; font-size:20px;"><b>Totale articolo: ' . $riga12['prezzo']*$quant1 . '</b>$</p></div></div><br>';								
									}
								}

								
								
								

								
							}
						}else{
							echo '<div class="row"><div class="col-sm-12"><br><br><br><h1 style="font-family: Times New Roman, serif;" align="center">Non hai ancora effettuato ordini, corri a fare shopping!</h1></div></div>';
						}
					?>
				</div>

			<?php include('footer.php'); ?>

	<?php } ?>

</body>
</html>