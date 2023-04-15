<?php 
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thelouvre";
$drawingId = $_GET["Id"];
$drawingName = $_GET["drawingName"];

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
    <title><?php echo $drawingName; ?></title>
</head>
<body class="bg-dark">
    <main>
      <?php include('../navBar/navDinamicpage.php'); ?>

      <?php
      $conn = new mysqli($servername, $username, $password, $dbname);
      $sql = "SELECT * FROM exhibits WHERE Id=$drawingId";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $_SESSION["drawingName"] = $row["Name"];
          echo '<div class="col">
                      <div class="card h-10 bg-dark">
                        <img class="mx-auto" style="width: 50%; height: 50%; align: center;" src="'. $row["FilePath"] . '">
                        <div class="card-body text-center">
                        <form method="get" action="dynamicwebpage.php" class="mx-auto">
                          <h2 class="card-text text-center my-2"><button class="buton border-0 bg-transparent text-white" type="submit" name="Id" value="'. $row["Id"] .'" class="nav-link text-white"</button>' . $row["Name"] . '</h2>
                        </form>                 
                        </div>
                      </div>
                </div>';
        }
      }
      ?>
      <?php include('../footer/footerDinWebPage.php'); ?>
    </main>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>