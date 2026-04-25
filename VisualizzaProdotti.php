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
  <title>Visualizza prodotti</title>

  <style type="text/css">
        

       

        .margin{
            margin-bottom: 45%;
        }



        #icone{
          font-size: 30px;



        }
           
    </style>

</head>
<body>

  <?php
    include('header.php'); ?>




    <div class="container">
    <br><hr><br><br>

        
      <div class="row">



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


                   


        $query="SELECT * FROM prodotti"; 
        $ris_query = $connessione->query($query);
        while($riga = $ris_query->fetch_assoc()){

            $idp1=$riga['idprod'];

            echo'<div class="col-3" style="border:1px solid black;" > <img style="background-color:#ededed;" src="' . $riga['immagine'] . ' " class="d-block w-100 img-fluid" alt="."><br><p><b>'. $riga['marca'] . '</b> ' . $riga['descrizione'] . '<br><b>' . $riga['prezzo'] . '$</b></p><form method="post">
              <button style="background-color: white; border: 0px;" type="submit" name="cancella" value="'. $idp1 .'" align="right"><i id="icone" class="bi bi-trash"></i></button></form></div>'; 

            


            if (isset($_POST['cancella'])) {

              $eliminaProd=$_POST['cancella'];

              $cancella= "DELETE FROM prodotti WHERE idprod = $eliminaProd";
              $ris_cancella = $connessione->query($cancella);
              $secondsWait = 1;
              echo '<meta http-equiv="refresh" content="'.$secondsWait.'">';

          }
    }?>
    
  </div>


</div>
</body>
</html>