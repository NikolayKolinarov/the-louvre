<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<<<<<<< HEAD
=======
    <link
>>>>>>> 0c847a2ac59ec58a171317f788073e25c6497528
      rel="stylesheet"
      href="/node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="/css/main.css?<?php echo time();?>">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300&family=Kdam+Thmor+Pro&family=Unica+One&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="galleryStyle.css?<?php echo time();?>">
    <title>Gallery</title>
  </head>
  <body>
    <main>
      <!-- Nav Bar -->
      <nav
        class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar-custom shadow"
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
                <a href="../home/home.php" class="nav-link active"
                  ><b>HOME</b></a
                >
              </li>
              <li class="nav-item">
                <a href="../contacts/contacts.php" class="nav-link active"><b>CONTACTS</b></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Gallery -->
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading text-dark">Welcome</h1>
          <p class="lead text-dark">To The Louvre Gallery</p>
        </div>
      </section>
      
      <div class="container">
        <div class="row">
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "thelouvre";

          $conn = new mysqli($servername, $username, $password, $dbname);
          $sql = "SELECT * FROM first_floor";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo '<div class="col-md-4">
                      <div class="thumbnail">
                        <img src="' . $row["IMAGE"] . '" alt="' . $row["NAME"] . ' " style="width:100%; height:250px">
                          <form method="get" action="dynamicwebpage.php" class="mx-auto">
                            <h2 class="card-text text-center my-2"><button class="buton border-0 bg-transparent text-white" type="submit" name="id" value="'. $row["ID"] .'" class="nav-link text-dark"</button>' . $row["NAME"] . '</h2>
                          </form>
                      </div>
                    </div>';
            }
          }
          ?>
        </div>
      </div>    
          
    <!-- Footer -->
    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="../home/home.php" class="footer-link px-2 text-white text-decoration-none">Home</a></li>
          <li class="nav-item"><a href="#" class="footer-link px-2 text-white text-decoration-none">Gallery</a></li>
          <li class="nav-item"><a href="../contacts/contacts.php" class="footer-link px-2 text-white text-decoration-none">Contacts</a></li>
        </ul>
        <p class="text-center text-white">&copy; 2022 Nikolay Kolibarov</p>
      </footer>
    </div>
    </main>

    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
