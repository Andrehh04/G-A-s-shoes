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
	<title>Header</title>

	<style type="text/css">
		
		#icone{
      	font-size: 30px;
      }

       #icone:hover{
      	color: red;
      	font-size: 32px;
      }

      @media(max-width: 1200px)
      {
      	#icone{
        	font-size: 20px;
        }

	</style>
</head>
<body>
	<div class="container">
	<!-- header -->
	<!--immagine logo-->



			
	<!--icone header-->	
		<?php 
			if (isset($email1)) {
				
			
	    ?>
	    	<div class="row align-items-center">
			<div class="col-sm-4">
			  	<img src="img/loghi/logoshop.png" class="img-fluid" alt="...">
			  	
			  	<?php  
			  		$query="SELECT nome FROM utenti WHERE email = '$email1'";	
					$ris_query = $connessione->query($query);
					if ($ris_query->num_rows > 0) {
			       		 $riga = $ris_query->fetch_assoc();	
						echo '&emsp;Benvenuto ' . $riga['nome'];	
					}	
			  	?>
			</div>	

			<div class="col-sm-6">
			
			</div>

			<div class="col-sm-2">
			  <nav class="navbar navbar-expand-lg navbar-light">
				  <div class="container-fluid">
				    
				    <div class="navbar-collapse" id="navbarSupportedContent">
				      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

				        <li class="nav-item">
				          <a class="nav-link active" aria-current="page" href="homepage.php">
				          	<i id="icone"  class="bi bi-house-fill"></i>
				          </a>
				        </li>

				        <li class="nav-item">
				          <a class="nav-link active" aria-current="page" href="preferiti.php">
				          	<i id="icone" class="bi bi-suit-heart-fill"></i>
				          </a>
				        </li>

				        <li class="nav-item">
				          <a class="nav-link active" aria-current="page" href="carrello.php">
				          	<i id="icone"  class="bi bi-cart-fill"></i>
				          </a>
				        </li>

				        <li class="nav-item">
				          <a class="nav-link active" aria-current="page" href="logout.php">
				          	<i id="icone" class="bi bi-box-arrow-right"></i>
				          </a>
				        </li>				               
				      </ul>			      
				    </div>
				  </div>
				</nav>
			</div>	

		<?php }

			else{
		 ?>
		 	<div class="row align-items-center">
			<div class="col-sm-4">
			  	<img src="img/loghi/logoshop.png" class="img-fluid" alt="...">
			  	
			</div>	

			<div class="col-sm-6">
				
			</div>
		 <div class="col-sm-2">
			  <nav class="navbar navbar-expand-lg navbar-light">
				  <div class="container-fluid">
				    
				    <div class="navbar-collapse" id="navbarSupportedContent">
				      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				        <li class="nav-item">
				          <a class="nav-link active" aria-current="page" href="utente.php">
				          	<i id="icone" class="bi bi-house-fill"></i>
				          </a>
				        </li>

				        <li class="nav-item">
				          <a class="nav-link active" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  aria-current="page" href="carrello.php">
				          	<i id="icone"  class="bi bi-cart-fill"></i>
				          </a>
				        </li>

				        <li class="nav-item">
				          <a class="nav-link active" aria-current="page" href="accesso.php">
				          	<i id="icone"  class="bi bi-person-fill"></i>
				          </a>
				        </li>        
				      </ul>			      
				    </div>
				  </div>
				</nav>
			</div>	

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

		<?php } ?>
	  
		</div>
	</div>

</body>
</html>