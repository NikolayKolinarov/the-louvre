<div class="container">
    <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="footer-link px-2 text-white text-decoration-none">Home</a></li>
        <li class="nav-item"><a href="../contacts/contacts.php" class="footer-link px-2 text-white text-decoration-none">Contacts</a></li>
        <?php 
            if(isset($_SESSION["loggedUser"]) && isset($_SESSION["loggedUserRole"])) {
                if ($_SESSION["loggedUserRole"] == "admin") {
                  echo '
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">'. $_SESSION['loggedUser'] .'</button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="viewProfile.php">View Profile</a></li>
                      <li><a class="dropdown-item" href="adminPanel.php">View Users</a></li>
                      <li><a class="dropdown-item" href="addUser.php">Add User</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="../register/logout.php">Log Out</a></li>
                    </ul>
                  </div>';
                } else {
                  echo '
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">'. $_SESSION['loggedUser'] .'</button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="viewProfile.php">View Profile</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="../register/logout.php">Log Out</a></li>
                    </ul>
                  </div>';
                }
              } else {
                echo '
                <li class="nav-item"><a href="../register/register.php" class="footer-link px-2 text-white text-decoration-none">Log In</a></li>
                <li class="nav-item"><a href="../register/signIn.php" class="footer-link px-2 text-white text-decoration-none">Sign In</a></li>
                ';
              }
        ?>
    </ul>
        <p class="text-center text-white">&copy; 2022 Nikolay Kolibarov</p>
    </footer>
</div>