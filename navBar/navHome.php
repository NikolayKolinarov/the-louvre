<nav class="navbar navbar-expand-lg navbar-light bg- fixed-top navbar-custom" aria-label="Fifth navbar example">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon navbar-dark bg-dark"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarsExample05">
      <ul class="nav navbar-nav navbar-right ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="#about" class="nav-link active about" id="aboutId"><b>ABOUT</b></a>
        </li>
        <li>
          <a href="../gallery/gallery.php" class="nav-link active gallery"><b>GALLERY</b></a>
        </li>
        <li>
          <a href="../contacts/contacts.php" class="nav-link active contacts"><b>CONTACTS</b></a>
        </li>
        <?php 
          if(isset($_SESSION["loggedUser"]) && isset($_SESSION["loggedUserRole"])) {
            if ($_SESSION["loggedUserRole"] == "admin") {
              echo '<div class="btn-group dropdown" id="#navbarsExample05">
              <button type="button" class="btn btn-transparent dropdown-toggle dropdown-btn" data-bs-toggle="dropdown" aria-expanded="false">'. $_SESSION['loggedUser'] .'</button>
              <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="../profile/userProfile.php">View Profile</a></li>
              <li><a class="dropdown-item" href="../adminPanel/admin.php">View Users</a></li>
              <li><a class="dropdown-item" href="addUser.php">Add User</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../register/logout.php">Log Out</a></li>
              </ul></div>';
            } else {
              echo '<div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">'. $_SESSION['loggedUser'] .'</button>
              <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="../profile/userProfile.php">View Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../register/logout.php">Log Out</a></li>
              </ul></div>';
            }
          } else {
            echo '<li>
              <a href="../register/register.php" class="nav-link active contacts"><b>LOGIN</b></a>
            </li>
            <li>
              <a href="../register/signIn.php" class="nav-link active contacts"><b>SIGNIN</b></a>
            </li>';
          }
        ?>
      </ul>
    </div>
  </div>
</nav>