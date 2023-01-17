<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="0; URL=http://localhost/18125/theLouvre/register/signIn.php" />
    <link
      rel="stylesheet"
      href="/node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300&family=Kdam+Thmor+Pro&family=Unica+One&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <title>Contacts</title>
  </head>
  <body class="bg-dark text-white">
    <main>
      <!-- Nav Bar -->
      <nav
        class="navbar navbar-expand-lg navbar-dark bg- fixed-top navbar-custom shadow"
        aria-label="Fifth navbar example"
      >
        <div class="container-fluid">
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarsExample05"
            aria-controls="navbarsExample05"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon navbar-dark bg-dark"></span>
          </button>

          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarsExample05"
          >
            <ul class="nav navbar-nav navbar-right ml-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a href="../home/home.php" class="nav-link active about" id="aboutId"><b>HOME</b></a>
              </li>
              <li>
                <a href="../gallery/gallery.php" class="nav-link active gallery"><b>GALLERY</b></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Contact Us-->
      <div
        class="modal modal-sheet position-static d-block bg-dark py-5"
        tabindex="-1"
        role="dialog"
        id="modalSheet"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header border-bottom-0">
              <h5 class="modal-title text-dark">GENERAL INFORMATION</h5>
            </div>
            <div class="modal-body py-0">
              <p class="text-dark">
                For general questions, requests for information or to send us
                feedback, please contact us <br><br> by email at : info@louvre.fr <br><br>or call
                us on : +33 (0)1 40 20 53 17 during museum opening hours.
              </p>
            </div>
          </div>
        </div>
      </div>
       <!-- Footer -->
       <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="../home/home.php" class="footer-link px-2 text-white text-decoration-none">Home</a></li>
            <li class="nav-item"><a href="../gallery/gallery.php" class="footer-link px-2 text-white text-decoration-none">Gallery</a></li>
            <li class="nav-item"><a href="#" class="footer-link px-2 text-white text-decoration-none">Contacts</a></li>
          </ul>
          <p class="text-center text-white">&copy; 2022 Nikolay Kolibarov</p>
        </footer>
      </div>
    </main>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
