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
	<title>Preferiti</title>

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
			$query = "SELECT * FROM dettagliopref INNER JOIN preferiti ON dettagliopref.idpref = preferiti.idpref WHERE email='$email1'";
			$ris_query = $connessione->query($query);

			if ($ris_query->num_rows > 0) {

				echo'<div class="row"><div class="col-sm-12" align="center"><h2 style="font-family: Times New Roman, serif;">Preferiti</h2></div></div><hr>';

				while ($riga = $ris_query->fetch_assoc()) {
					$pref=$riga['idpref'];
					$idprod = $riga['idprod'];
					$query1 = "SELECT * FROM prodotti WHERE idprod=$idprod";
					$ris_query1 = $connessione->query($query1);
					

					while ($riga1 = $ris_query1->fetch_assoc()) {
						echo'<div class="row" align="center"><div class="col-sm-2"><a href="prodotto.php?idprod=' . $idprod .'"><img src="' . $riga1['immagine'] . '" width="150px" alt="."></a></div><div class="col-sm-4"><br><br><p class="text-center" style="font-family: Times New Roman, serif; font-size:24px;"><b>'. $riga1['marca'] . '</b> ' . $riga1['descrizione'] . '</div>' . '<div class="col-sm-1"><br><br><form method="post"><button type="submit" name="cestino" value="'.$idprod.'" style="border:0px; background-color:white;"><i id="icone" class="bi bi-heartbreak-fill"></i></button></form></div></div><br><hr>';


						if (isset($_POST['cestino'])) {	
							$elimprod=$_POST['cestino'];						
							$queryelim="DELETE FROM dettagliopref WHERE idprod=$elimprod AND idpref=$pref";
							$ris_queryelim = $connessione->query($queryelim);
							$secondsWait = 1;
							echo '<meta http-equiv="refresh" content="'.$secondsWait.'">';
						}
					
						

					}



				}

				?>

			<?php }else{
				echo '<div class="row"><div class="col-sm-12"><br><br><br><h1 style="font-family: Times New Roman, serif;" align="center">La lista dei preferiti è vuota</h1></div></div>';
			} ?>		
	</div>


		<?php include('footer.php'); } ?>
</body>
</html>