<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
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
      <?php include('../navBar/navGallery.php'); ?>
      <!-- Gallery -->
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading text-dark">Welcome</h1>
          <p class="lead text-dark">To The Louvre Gallery</p>
        </div>
      </section>
      
      <div class="container">
        <div class="filter">
        <form method="get" action="filter.php">
          <label for="category">Filter by category:</label>
          <select name="category" id="category">
            <option selected disabled>Choose category</option>
            <option value="Portrait" <?php if (isset($_SESSION['selectedCategory']) && $_SESSION['selectedCategory'] == 'Portrait') { echo 'selected';} unset($_SESSION['selectedCategory']);?>>Portrait</option>
            <option value="Nature" <?php if (isset($_SESSION['selectedCategory']) && $_SESSION['selectedCategory'] == 'Nature') { echo 'selected';} unset($_SESSION['selectedCategory']);?>>Nature</option>
          </select>
          <button type="submit">Filter</button>
        </form>
        </div>
        <div class="row">
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "thelouvre";
          $sql = "";

          $conn = new mysqli($servername, $username, $password, $dbname);

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          
          if (isset($_SESSION["sqlFilter"])) {
            $sql = $_SESSION["sqlFilter"];
            unset($_SESSION["sqlFilter"]);          
          } else {
            $sql = "SELECT * FROM exhibits ORDER BY Category";
          } 

          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo '<div class="col-md-4">
                      <div class="thumbnail">
                        <img src="' . $row["FilePath"] . '" alt="' . $row["Name"] . ' " style="width:100%; height:250px">
                          <form method="get" action="dynamicwebpage.php" class="mx-auto">
                            <input style="display: none" name="drawingName" value="'. $row["Name"] .'">
                            <h2 class="card-text text-center my-2"><button class="buton border-0 bg-transparent text-white" type="submit" name="Id" value="'. $row["Id"] .'" class="nav-link text-dark"</button>' . $row["Name"] . '</h2>
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
