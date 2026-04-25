<!doctype html>
<html>

<head>
<title>INSERISCI PRODOTTO</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="/lib/jquery-1.12.2.min.js"></script>
<script src="/lib/bootstrap.min.js"></script>

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
        <form method="post">


          <div class="form-outline mb-4"  style="margin-top:3%";> 
              
              <input type="text" id="form2Example18" name="id" class="form-control form-control-lg" required placeholder="Inserisci id del prodotto">
              

            </div>
            <div class="form-outline mb-4">
              
              <input type="text" id="form2Example18" name="desc" class="form-control form-control-lg" required placeholder="Inserisci descrizione">
              

            </div>
            <div class="form-outline mb-4">
            
              <input type="text" id="form2Example18" name="costo" class="form-control form-control-lg" required placeholder="Inserisci costo">
              

            </div>
            <div class="form-outline mb-4">
            
              <input type="text" id="form2Example18" name="brand" class="form-control form-control-lg" required placeholder="Inserisci marca">
              

            </div>
      
           
      
          <div class="input-group">
            <input type="file" class="form-control" name="foto" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" >
          </div>

          <div align="center">
          <button type="submit" class="btn btn-outline-danger" name="invia" style="margin-top:3%; padding-left: 13%; padding-right: 13%; border-radius:40px; align-content:center;">Aggiungi</button>
          </div>

       
        </form>

        <?php
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

            $idprod = $_POST['id'];
            $descrizione = $_POST['desc'];
            $prezzo = $_POST['costo'];
            $marca = $_POST['brand'];
            $immagine = $_POST['foto'];
            $contatore=0;
            


                
                $insert_sql = "INSERT INTO prodotti
                      (idprod, descrizione, prezzo, marca, immagine)
                      VALUES
                      ('$idprod',
                      '$descrizione','$prezzo','$marca','$immagine' )";

                $query="SELECT idprod FROM prodotti ";

                $ris_query = $connessione->query($query);
                if ($ris_query->num_rows >= 0) {
                
                    while($riga = $ris_query->fetch_assoc()) {

                      if($idprod == $riga["idprod"])
                        {
                          $contatore ++;
                        }

                    }

                if($contatore>0){

                  echo '<div class="alert alert-danger" role="alert" style="margin-top:5%;">Id del prodotto già esistente</div>';

                }elseif (!$connessione->query($insert_sql)) {

                  echo "Errore della query: " . $connessione->error . ".";
                }else{


                  echo '<div class="alert alert-success" role="alert" style="margin-top:5%;">Prodotto aggiunto correttamente</div>';
                        

                }

                $connessione->close();
          }

    }
          
?>


</div>
  
    
</body>
</html>



