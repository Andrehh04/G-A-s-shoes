<!doctype html>
<html>
<head>
<title>Accesso</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="/lib/jquery-1.12.2.min.js"></script>
<script src="/lib/bootstrap.min.js"></script>

    <style type="text/css">
        

       

        .margin{
            margin-bottom: 45%;
        }



        

         @media(max-width: 1200px){
          
             

              

           
    </style>
</head>
<body>
    
    

    <section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0"><img class="img-fluid" src="img/loghi/logoshop.png"></span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="post">

            <h1 style="letter-spacing: 2px;">Accesso</h1>

            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example18">Indirizzo Email</label>
              <input type="email" id="form2Example18" name="EmailU" class="form-control form-control-lg" required>
              

            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example28">Password</label>
              <input type="password" id="form2Example28" name="pass" class="form-control form-control-lg" required>
              
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" class="btn btn-outline-danger" style="background-color: black; color: white; border-color: black;" name="invia" type="submit">Accedi</button>
            </div>

            
            <p>Non hai un account? <a href="registrazione.php" style="color: red;">Registrati qui!</a></p>
            
            <p>O vuoi accedere da <a href="utente.php" style="color: red;">ospite?</a></p>

          </form>

        </div>
        <?php

          session_start();
                 

          if(isset($_POST['invia'])) {

              $host = "localhost";
              $user = "root";
              $password = "";
              $db="fabianomazzashop";

              


              $connessione = new mysqli($host, $user, $password, $db);

              if ($connessione->connect_errno) {
                  echo "Connessione fallita: ". $connessione->connect_error . ".";
                  exit();
              }

              $Email = $_POST['EmailU'];
              $password = $_POST['pass'];
              
              if ((strcmp ($Email, 'admin@gmail.com') ==0 ) AND (strcmp ($password, 'admin') ==0 ) ) {
                header("location: admin.php");
              }

              $query="SELECT email, password FROM utenti WHERE email = '$Email' AND password = '$password' ";

              $ris_query = $connessione->query($query);

              $riga = $ris_query->fetch_assoc();




              
              if ($ris_query->num_rows > 0) {
                $_SESSION['login'] = $riga['email'];
                
               header("location: homepage.php");
              }else{


                    echo '<div class="alert alert-danger" role="alert" style="margin-top:5%;">Credenziali errate</div>';

              }
            

              $connessione->close();
          }

          
      ?>

      </div>
      <div class="col-sm-8 px-0 d-none d-sm-block">
        <img src="img/im4.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>

</div>
</body>


</html>

