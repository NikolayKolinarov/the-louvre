<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #google_translate_element select{
    background-color: transparent;
    color: white;
    margin-top: 13px;
  }
  
  .goog-logo-link{
    display:none !important;
  }
    
  .goog-te-gadget{
    color:transparent!important;
  }

  .goog-te-banner-frame.skiptranslate {
    display: none !important;
  } 
  
  body {
    top: 0px !important; 
  }
    
  .goog-te-banner-frame{
    display:none !important;
  }
  
  #goog-gt-tt, .goog-te-balloon-frame{display: none !important;}
  .goog-text-highlight { background: none !important; box-shadow: none !important;}
  #google_translate_element span{
    display:none !important;
  }
  
  .skiptranslate iframe{
    display: none !important;
    visibility: hidden !important;
  }
  </style>
</head>
<body>
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
              <?php include('google.php'); ?>
              <?php 
              if(isset($_SESSION["loggedUser"]) && isset($_SESSION["loggedUserRole"])) {
                if ($_SESSION["loggedUserRole"] == "admin") {
                  echo '<div class="btn-group dropdown nav-link active">
                  <button type="button" class="btn dropdown-link dropdown-toggle active btn-transparent pt-0 pb-0" data-bs-toggle="dropdown" aria-expanded="false">'. $_SESSION['loggedUser'] .'</button>
                  <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="../profile/userProfile.php">View Profile</a></li>
                  <li><a class="dropdown-item" href="../adminPanel/admin.php">View Users</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="../register/logout.php">Log Out</a></li>
                  </ul></div>';
                } else {
                  echo '<div class="btn-group dropdown nav-link active">
                  <button type="button" class="btn dropdown-link dropdown-toggle active btn-transparent pt-0 pb-0" data-bs-toggle="dropdown" aria-expanded="false">'. $_SESSION['loggedUser'] .'</button>
                  <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="../profile/userProfile.php">View Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="../register/logout.php">Log Out</a></li>
                  </ul></div>';
                }
              } else {
                echo '
                <li>
                  <a href="../register/register.php" class="nav-link active contacts"><b>LOGIN</b></a>
                </li>
                <li>
                  <a href="../register/signIn.php" class="nav-link active contacts"><b>SIGNIN</b></a>
                </li>
                ';
              }
              ?>
            </ul>
          </div>
      </div>
</nav>
</body>
</html>