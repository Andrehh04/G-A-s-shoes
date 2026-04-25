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
	<title>Carrello</title>

	<style type="text/css">

		.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      #stik{
      	position: sticky;
      }




      #botcar{
      	margin-top:20%;
      }

      @media (min-width: 768px) 
      {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }

        #botcar{
      	margin-top:5%;
      }

      }

      

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
	<div class="container">
		<hr>
		<?php 
			$query = "SELECT * FROM dettaglio INNER JOIN carrello ON dettaglio.idcarr = carrello.idcarr WHERE email='$email1'";
			$ris_query = $connessione->query($query);

			if ($ris_query->num_rows > 0) {
				echo'<div class="row"><div class="col-sm-12" align="center"><h2 style="font-family: Times New Roman, serif;">Carrello</h2></div></div><hr>';
				$prezzotot=0;
					
				while ($riga = $ris_query->fetch_assoc()) {
					$car=$riga['idcarr'];
					$idprod = $riga['idprod'];
					$quant=$riga['quantita'];
					$query1 = "SELECT * FROM prodotti WHERE idprod=$idprod";
					$ris_query1 = $connessione->query($query1);
					

					while ($riga1 = $ris_query1->fetch_assoc()) {


						echo'<div class="row"><div class="col-sm-2"><img src="' . $riga1['immagine'] . '" width="150px" alt="."></div><div class="col-sm-4"><br><br><p class="text-center" style="font-family: Times New Roman, serif; font-size:24px;"><b>'. $riga1['marca'] . '</b> ' . $riga1['descrizione'] . '</div>' . '<div class="col-sm-3"><br><br><p class="text-center" style="font-family: Times New Roman, serif; font-size:20px;">'. 'Quantità selezionata: ' . $quant . '</p></div><div class="col-sm-2"><br><br><p class="text-center" style="font-family: Times New Roman, serif; font-size:20px;"><b> Totale: ' . $riga1['prezzo']*$quant . '</b>$</p></div><div class="col-sm-1"><form method="post"><button type="submit" name="cestino" value="'.$idprod.'" style="border:0px; background-color:white;"><i id="icone" class="bi bi-trash"></i></button></form></div></div><br><hr>';

						$prezzotot+=$riga1['prezzo']* $quant;


						if (isset($_POST['cestino'])) {	
							$elimprod=$_POST['cestino'];						
							$queryelim="DELETE FROM dettaglio WHERE idprod=$elimprod AND idcarr=$car";
							
							$ris_queryelim = $connessione->query($queryelim);
							$secondsWait = 1;
							echo '<meta http-equiv="refresh" content="'.$secondsWait.'">';
						}
					
						

					}





				}

			



				$riepilogo="SELECT SUM(quantita) AS quantita FROM dettaglio WHERE idcarr=$car";
				$ris_riepilogo = $connessione->query($riepilogo);

				while($riga8 = $ris_riepilogo->fetch_assoc())
				{



				
				$quantTot=$riga8['quantita'];

				
				}


				?>

				<div class="row">
					<div class="col-sm-6" align="right">
						<form method="post">
							<button class="btn btn-info btn-lg btn-block" style="background-color: black; color: white; border-color: black; border-radius: 40px; margin: 2%; margin-top:7%; padding-left: 10%; padding-right: 10%; padding-top: 1%; padding-bottom: 1%;" name="carrello" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Conferma ordine</button>
						</form>
					</div>

					<div class="col-sm-6" align="left">
							<a href="ordini.php"><button class="btn btn-info btn-lg btn-block" style="background-color: black; color: white; border-color: black; border-radius: 40px; margin: 2%; margin-top:7%; padding-left: 10%; padding-right: 10%; padding-top: 1%; padding-bottom: 1%;" name="carrello" type="button">Visualizza ordini</button></a>
					</div>
				</div>

				

			<?php }else{
				echo '<div class="row"><div class="col-sm-12"><br><br><br><h1 style="font-family: Times New Roman, serif;" align="center">Il carrello è vuoto!</h1></div></div>';

				echo'<div class="row"><div class="col-sm-12"><div class="col-sm-6" align="left">
							<a href="ordini.php"><button class="btn btn-info btn-lg btn-block" style="background-color: black; color: white; border-color: black; border-radius: 40px; margin: 2%; margin-top:7%; padding-left: 10%; padding-right: 10%; padding-top: 1%; padding-bottom: 1%;" name="carrello" type="button">Visualizza ordini</button></a>
					</div></div></div>';
			} ?>		
	</div>


		<?php include('footer.php'); } ?>


</body>


		

			<!-- Modal -->
			<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="staticBackdropLabel">Riepilogo ordine</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			        <form class="row g-3" method="post">

			        	<div class="col-md-6">
								    <label for="inputEmail4" class="form-label"><b>Quantità totale: </b></label>
								  <?php 

								    echo $quantTot ;

								    ?>
								  </div>
								  <div class="col-md-6">
								    <label for="inputEmail4" class="form-label"><b>Prezzo Totale: </b></label>
								    <?php 

								    echo $prezzotot . "$" ;

								    ?>
								  </div>
								  <hr style="margin-top: 5%; margin-bottom: 3% ;" >
								   	<label for="inputEmail4" class="form-label"><b> Dati angarafici </b></label>								   
								  <div class="col-md-6">
								    <label for="inputEmail4" class="form-label">Nome</label>
								    <input type="text" class="form-control" id="inputEmail4" placeholder="Inserisci il tuo Nome" required>
								  </div>
								  <div class="col-md-6">
								    <label for="inputPassword4" class="form-label">Cognome</label>
								    <input type="text" class="form-control" id="inputPassword4" placeholder="Inserisci il tuo Cognome" required>
								  </div>
								  <div class="col-12">
								    <label for="inputAddress" class="form-label">Indirizzo</label>
								    <input type="text" class="form-control" id="inputAddress" placeholder="Inserisci il tuo indirizzo" required>
								  </div>
								  
								  <div class="col-md-6">
								    <label for="inputCity" class="form-label">Città</label>
								    <input type="text" class="form-control" id="inputCity" placeholder="Inserisci la tua città" required>
								  </div>
								   <div class="col-md-2">
								    <label  class="form-label">CAP</label>
								    <input type="text" minlength="5" maxlength="5" class="form-control" id="inputZip" placeholder="CAP" required>
								  </div>

								  <hr style="margin-top: 5%; margin-bottom: 3% ;" >
								  <label for="inputEmail4" class="form-label" ><b> Dati della carta </b></label>			
								  <div class="col-12">
								    <label for="inputAddress2" class="form-label" >Numero carta</label>
								    <input type="text" minlength="16" maxlength="16" class="form-control" id="inputAddress2" placeholder="Inserisci il numero della tua carta"  required>
								  </div>
								   <div class="col-md-2">
								    <label  class="form-label">CVV</label>
								    <input type="text" minlength="3" maxlength="3" class="form-control" id="inputZip" placeholder="CVV" required>
								  </div>
								  <div class="col-md-6">
								    <label for="inputCity" class="form-label">Data di scadenza</label>
								    <input type="date" class="form-control" id="inputCity" required>
								  </div>
								 
								 <div class="modal-footer">
							        <button type="submit" name="pagamento" class="btn btn-outline-danger">Conferma pagamento</button>
							     </div>
								 
								  
								</form>

								<?php
									if (isset($_POST['pagamento'])) {
										$data='temporaneo';
										
										
										$query0="INSERT INTO ordini (dataOrdine, email) VALUES ('$data', '$email1') ";
										$ris_query0 = $connessione->query($query0);
										$query1="SELECT idord FROM ordini WHERE dataOrdine='$data'";
										$ris_query1 = $connessione->query($query1);
										$riga1 = $ris_query1->fetch_assoc();
										$idord = $riga1['idord'];

										$data1=date('m-d-Y H:i:s a', time());

										$aggiorna="UPDATE ordini SET dataOrdine='$data1' WHERE dataOrdine='$data'";
										$ris_aggiorna = $connessione->query($aggiorna);
										

										$query = "SELECT * FROM dettaglio INNER JOIN carrello ON dettaglio.idcarr = carrello.idcarr WHERE email='$email1'";
										$ris_query = $connessione->query($query);
										while ($riga = $ris_query->fetch_assoc()) {
											$car=$riga['idcarr'];
											$idprod = $riga['idprod'];
											$quant=$riga['quantita'];

											$query2="INSERT INTO dettaglioord (quant, idp, idcarr, idord) VALUES ($quant, $idprod, $car, $idord)";
											$ris_query2 = $connessione->query($query2);
										}

										$eliminadett="DELETE FROM dettaglio WHERE idcarr=$car";
										$ris_eliminadett = $connessione->query($eliminadett);

										$secondsWait = 1;
										echo '<meta http-equiv="refresh" content="'.$secondsWait.'">';										
									}

								?>
			      </div>
			      
			    </div>
			  </div>
			</div>
</html>