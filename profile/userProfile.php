<?php 
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thelouvre";
$username = $_SESSION["loggedUser"];
$last_page = isset($_SESSION['last_page']) ? $_SESSION['last_page'] : '../home/home.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    <link
    rel="stylesheet"
    href="/node_modules/bootstrap/dist/css/bootstrap.min.css"
  />
  <link rel="stylesheet" href="/css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300&family=Kdam+Thmor+Pro&family=Unica+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="userProfile.css">
    <title><?php echo $username; ?></title>
</head>
<body>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <a href="<?= $last_page ?>" class="btn btn-primary btn-login text-uppercase fw-bold float-start">Go Back</a>
            <div class="mt-3 mb-4">
              <img src="userPicture.png"
                class="rounded-circle img-fluid" style="width: 100px;" />
            </div>
            <p class="text-muted mb-4"><?php echo '@'. $username.'' ?> <span class="mx-2">
            <a href=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>