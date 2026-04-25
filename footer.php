<!DOCTYPE html>
<html>
<head>
  <title>Footer</title>

  <style type="text/css">
    
  </style>
</head>
<body> 
 <p style="margin-top: 15%;"></p>
  <!-- Footer -->
<footer class="text-center text-lg-start bg-black text-muted" >
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block text-center">
      <p>Per ulteriori informazioni contattateci su Instagram  <a href="https://www.instagram.com/gieneis_shoes/" style="color: white;"><i class="bi bi-instagram"></i></a></p>

    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="https://www.instagram.com/gieneis_shoes/" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>G&A's Shoes
          </h6>
          <p>
            Dove la comodità incontra lo stile, dove la qualità è sempre assicurata e i prezzi convenienti.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Altri prodotti
          </h6>
          <?php 
            if (isset($email1)) {
          ?>
            <p>
              <a href="marche.php?marca=nike" class="text-reset">Nike</a>
            </p>
            <p>
              <a href="marche.php?marca=adidas" class="text-reset">Adidas</a>
            </p>
            <p>
              <a href="marche.php?marca=converse" class="text-reset">Converse</a>
            </p>
            <p>
              <a href="marche.php?marca=lacoste" class="text-reset">Lacoste</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Altri prodotti
            </h6>
            <p>
              <a href="marche.php?marca=vans" class="text-reset">Vans</a>
            </p>
            <p>
              <a href="marche.php?marca=jordan" class="text-reset">Jordan</a>
            </p>
            <p>
              <a href="marche.php?marca=puma" class="text-reset">Puma</a>
            </p>
          <?php }else{ ?>
              <p>
                <a href="marcheUtente.php?marca=nike" class="text-reset">Nike</a>
              </p>
              <p>
                <a href="marcheUtente.php?marca=adidas" class="text-reset">Adidas</a>
              </p>
              <p>
                <a href="marcheUtente.php?marca=converse" class="text-reset">Converse</a>
              </p>
              <p>
                <a href="marcheUtente.php?marca=lacoste" class="text-reset">Lacoste</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Altri prodotti
              </h6>
              <p>
                <a href="marcheUtente.php?marca=vans" class="text-reset">Vans</a>
              </p>
              <p>
                <a href="marcheUtente.php?marca=jordan" class="text-reset">Jordan</a>
              </p>
              <p>
                <a href="marcheUtente.php?marca=puma" class="text-reset">Puma</a>
              </p>
            <?php } ?>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Fossato Serralta, FS 88050, IT</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            Gieneisshoes@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +01 123 456 7890</p>
          <p><i class="fas fa-print me-3"></i> + 01 987 654 3210</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
   G&A's Shoes
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>