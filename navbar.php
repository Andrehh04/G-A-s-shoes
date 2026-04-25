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
	<title>navbar</title>
</head>
<body>

	<div class="container">

				<?php 
					if (isset($email1)) {
				  	
						
			  	?>

		<div class="row">

				<ul class="nav justify-content-center">
				  <li class="nav-item">
				    <a class="nav-link active" aria-current="page" href="marche.php?marca=nike">
				    	<img width="50px" class="img-fluid" src="img/loghi/nike.png">
				    </a>
				  </li>

				  <li class="nav-item">
				    <a class="nav-link" href="marche.php?marca=adidas">
				    	<img width="50px;" class="img-fluid" src="img/loghi/adidas.png">
				    </a>
				  </li>

				  <li class="nav-item">
				    <a class="nav-link" href="marche.php?marca=puma">
				    	<img width="50px" class="img-fluid" src="img/loghi/puma.png">
				    </a>
				  </li>

				  <li class="nav-item">
				    <a class="nav-link" href="marche.php?marca=jordan">
				    	<img width="50px" class="img-fluid" src="img/loghi/jordan.png">
				    </a>
				  </li>

				  <li class="nav-item">
				    <a class="nav-link" href="marche.php?marca=converse">
				    	<img width="50px" class="img-fluid" src="img/loghi/converse.png">
				    </a>
				  </li>

				  <li class="nav-item">
				    <a class="nav-link" href="marche.php?marca=lacoste">
				    	<img width="50px" class="img-fluid" src="img/loghi/lacoste.png">
				    </a>
				  </li>

				  <li class="nav-item">
				    <a class="nav-link" href="marche.php?marca=vans">
				    	<img width="50px" class="img-fluid" src="img/loghi/vans.png">
				    </a>
				  </li>			  
				</ul>
			</div>	

		<?php }else{ ?>

			<div class="row">
				<ul class="nav justify-content-center">
				  <li class="nav-item">
				    <a class="nav-link active" aria-current="page" href="marcheUtente.php?marca=nike">
				    	<img width="50px" class="img-fluid" src="img/loghi/nike.png">
				    </a>
				  </li>

				  <li class="nav-item">
				    <a class="nav-link" href="marcheUtente.php?marca=adidas">
				    	<img width="50px;" class="img-fluid" src="img/loghi/adidas.png">
				    </a>
				  </li>

				  <li class="nav-item">
				    <a class="nav-link" href="marcheUtente.php?marca=puma">
				    	<img width="50px" class="img-fluid" src="img/loghi/puma.png">
				    </a>
				  </li>

				  <li class="nav-item">
				    <a class="nav-link" href="marcheUtente.php?marca=jordan">
				    	<img width="50px" class="img-fluid" src="img/loghi/jordan.png">
				    </a>
				  </li>

				  <li class="nav-item">
				    <a class="nav-link" href="marcheUtente.php?marca=converse">
				    	<img width="50px" class="img-fluid" src="img/loghi/converse.png">
				    </a>
				  </li>

				  <li class="nav-item">
				    <a class="nav-link" href="marcheUtente.php?marca=lacoste">
				    	<img width="50px" class="img-fluid" src="img/loghi/lacoste.png">
				    </a>
				  </li>

				  <li class="nav-item">
				    <a class="nav-link" href="marcheUtente.php?marca=vans">
				    	<img width="50px" class="img-fluid" src="img/loghi/vans.png">
				    </a>
				  </li>			  
				</ul>
			</div>	



		<?php } ?>
		
	</div>

</body>
</html>