<?php 
session_start();
$_SESSION['last_page'] = $_SERVER['REQUEST_URI'];
?>
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
    <link rel="icon" type="image/x-icon" href="../images/favIcon.png">
    <title>Експонати</title>
  </head>
  <body class="bg-dark">
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
      
      <div id="test" class="container">
        <div class="filter w-100">
        <form method="post">
          <div class="input-group mb-3 w-100">
            <label for="filter" class="input-group-text">Filter by category:</label>
            <select class="from-select" id="filter" name="filter" onchange="this.form.submit()">
              <option value="All" <?php if (isset($_POST['filter']) && $_POST['filter'] == 'All') echo 'selected'; ?>>All</option>
              <option value="Painting" <?php if (isset($_POST['filter']) && $_POST['filter'] == 'Painting') echo 'selected'; ?>>Painting</option>
              <option value="Sculpture" <?php if (isset($_POST['filter']) && $_POST['filter'] == 'Sculpture') echo 'selected'; ?>>Sculpture</option>
              <option value="Structure" <?php if (isset($_POST['filter']) && $_POST['filter'] == 'Structure') echo 'selected'; ?>>Structure</option>
            </select>
          </div>
        </form>
        </div>
        <div class="row">
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "thelouvre";
          $sql = "";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);

          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $filter = $_POST['filter'];
            if ($filter == 'All') {
              $sql = "SELECT * FROM exhibits";
            } else {
              $sql = "SELECT * FROM exhibits WHERE Category='$filter'";
            }
          } else {
            $sql = "SELECT * FROM exhibits";
          }

          $result = $conn->query($sql);


          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo '<div class="col-md-4">
                      <div class="thumbnail">
                        <form method="get" action="dynamicwebpage.php" class="mx-auto">
                          <img src="' . $row["FilePath"] . '" alt="' . $row["Name"] . ' " style="width:100%; height:250px">
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
    <?php include('../footer/footerGallery.php'); ?>
    </main>

    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
