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
	<title>G&A's Shoes</title>

	<style>
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

      #icone{
      	font-size: 30px;
      }

      #sfondo{
      	background-color: gray;
      }

      #pro{
      	font-family: 'Times New Roman', serif; 
      	font-size: 16px;     	
      }

      #pro:hover{
      	border: 1px solid black;
      }

      body{
      	overflow-x: hidden;
      }

      @media (min-width: 768px) 
      {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }

      }

      @media(max-width: 1200px)
      {
      	#icone{
        	font-size: 20px;
        }

        
      }
    </style>

    
  
</head>
<body>
	


	<div class="container">
	<!-- header -->
		<?php include('header.php'); ?>
					<!--fine header-->

			<!--navbar-->
			<hr>
				<?php include('navbar.php'); ?>
			<hr>
			<!--fine navbar-->

			<!--inizio carosello-->
			<div class="row">
				<div class="col">
				  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
					  <div class="carousel-indicators">
					    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
					    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
					    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
					    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
					  </div>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="img/carosello/im1.jpg" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="img/carosello/im2.jpg" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="img/carosello/im3.jpg" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="img/carosello/im4.jpg" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="img/carosello/im5.jpg" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="img/carosello/im6.jpg" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="img/carosello/im7.jpg" class="d-block w-100" alt="...">
					    </div>
					  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Previous</span>
					  </button>
					  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Next</span>
					  </button>
					</div>
				</div><br><br><hr><br><br>	
		  	</div>   	
	 	 </div>

	 	 <div class="row" style="font-family: 'Times New Roman', serif;">
	 	 	<h1 align="center"> La nostra azienda</h1>
	 	 	<p align="center">
	 	 		il nostro motto è sempre stato "<b>Beautiful people wear beautiful shoes</b>"<br>perchè crediamo che le scarpe che si indossano possono dire <br>molte cose su una persona. 
	 	 	</p>

	 	 	<br><br><br><br><br><br><hr><br><br>
	 	 </div>
	 	 

	 	 <!--immagini prodotti nike che scorrono-->

	 	 <div class="row" style="font-family: 'Times New Roman', serif;">
	 	 	<h3>Nuove uscite</h3>
	 	 </div>


	 	 
		      <div class="row">
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

				 
					
				for ($idprod=1; $idprod <7 ; $idprod++) { 
					unset($riga);
					$query="SELECT * FROM prodotti WHERE idprod = $idprod";	
					$ris_query = $connessione->query($query);
					if ($ris_query->num_rows > 0) {

		        		$riga = $ris_query->fetch_assoc();

		            
						echo'<div id="pro" class="col-sm-3"><a href="prodottoUtente.php?idprod= ' . $idprod .'"> <img style="background-color:#ededed;" src="' . $riga['immagine'] . '" class="d-block w-100" alt="."></a><br><p><b>'. $riga['marca'] .'</b> '. $riga['descrizione'] . '<br><b>' . $riga['prezzo'] . '$</b></p></div>';
			        }
				}
				
		        

		        
			?>
					
				</div>	
		  

		
	 	  	</div>
	 	  <div class="row">
	 	 	<?php include('footer.php'); ?>
	 	 </div>

	

</body>
</html>