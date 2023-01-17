<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0; URL=http://localhost/18125/theLouvre/register/signIn.php" />
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
    <title><?php echo $_SESSION["drawingName"];?></title>
</head>
<body>
    <main>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar-custom shadow" aria-label="Fifth navbar example">
        <div class="container-fluid">
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon navbar-dark bg-dark"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarsExample05">
            <ul class="nav navbar-nav navbar-right ml-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a href="../home/home.php" class="nav-link active"><b>HOME</b></a>
              </li>
              <li class="nav-item">
                <a href="../contacts/contacts.php" class="nav-link active"><b>CONTACTS</b></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "thelouvre";
      $drawingID = $_GET["id"];

      $conn = new mysqli($servername, $username, $password, $dbname);
      $sql = "SELECT * FROM first_floor WHERE ID=$drawingID";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $_SESSION["drawingName"] = $row["NAME"];
          echo '<div class="col">
                      <div class="card shadow-sm h-10">
                        <img class="mx-auto" style="width: 50%; height: 50%; align: center;" src="'. $row["IMAGE"] . '">
                        <div class="card-body text-center">
                        <form method="get" action="dynamicwebpage.php" class="mx-auto">
                          <h2 class="card-text text-center my-2"><button class="buton border-0 bg-black text-white" type="submit" name="id" value="'. $row["ID"] .'" class="nav-link text-dark"</button>' . $row["NAME"] . '</h2>
                        </form>                 
                        </div>
                      </div>
                </div>';
        }
      }
      ?>
    </main>
</body>
</html>