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

</body>

    <div class="container" align="center">
      

      <div class="row" style="font-family: 'Times New Roman', serif;">
            <h1 align="center"> Benvenuto nell'area Admin </h1>
            <p align="center">
              Cosa vuoi fare?
            </p>

            <br><br><br><br><br><br><hr><br><br>
           </div>

           <div>
            <a href="inserireProdotti.php"><button type="button" class="btn btn-outline-danger" name="invia" style="margin-top:1%; padding-left: 12%; padding-right: 13%; border-radius:40px; align-content:center;">Inserisci prodotto</button></a>
          </div>
          
            <div>
              <a href="VisualizzaProdotti.php"><button type="button" class="btn btn-outline-danger" name="invia" style="margin-top:1%; padding-left: 13%; padding-right: 12%; border-radius:40px; align-content:center;">Visualizza prodotti</button></a>
            </div>
      </div>

</html>