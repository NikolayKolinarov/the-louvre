<div class="container">
    <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="../index.php" class="footer-link px-2 text-white text-decoration-none">Home</a></li>
        <li class="nav-item"><a href="../gallery/gallery.php" class="footer-link px-2 text-white text-decoration-none">Gallery</a></li>
        <li class="nav-item"><a href="../contacts/contacts.php" class="footer-link px-2 text-white text-decoration-none">Contacts</a></li>
        <?php 
            if(isset($_SESSION["loggedUser"]) && isset($_SESSION["loggedUserRole"])) {
                if ($_SESSION["loggedUserRole"] == "admin") {
                  echo '
                  <li class="nav-item"><a href="../adminPanel/admin.php" class="footer-link px-2 text-white text-decoration-none">Admin</a></li>';
                } 
              } else {
                echo '
                <li class="nav-item"><a href="../register/register.php" class="footer-link px-2 text-white text-decoration-none">Log In</a></li>
                <li class="nav-item"><a href="../register/signIn.php" class="footer-link px-2 text-white text-decoration-none">Sign In</a></li>
                ';
              }
        ?>
    </ul>
        <p class="text-center text-white">&copy; 2023 Nikolay Kolibarov</p>
    </footer>
</div>