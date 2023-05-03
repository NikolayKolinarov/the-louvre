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
          <a href="../index.php"><img src="../images/TheLouvreLogo.avif" alt="Logo" style="width: 70px;height: 35px;"></a>

          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarsExample05"
          >
            <ul class="nav navbar-nav navbar-right ml-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a href="../index.php" class="nav-link active"
                  ><b>HOME</b></a
                >
              </li>
              <li class="nav-item">
                <a href="../gallery/gallery.php" class="nav-link active"><b>GALLERY</b></a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active"><b>CONTACTS</b></a>
              </li>
              <div id='google_translate_element'>
                <script>
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({
                    pageLanguage: 'en,bg',
                    includedLanguages:'en,bg', 
                    layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
                  }, 'google_translate_element');
                }
                </script>
                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
              </div>
              <?php 
              if(isset($_SESSION["loggedUser"]) && isset($_SESSION["loggedUserRole"])) {
                if ($_SESSION["loggedUserRole"] == "admin") {
                  echo '<div class="btn-group dropdown nav-link active text-decoration-none">
                  <button type="button" class="btn dropdown-link dropdown-toggle active btn-transparent pt-0 pb-0" data-bs-toggle="dropdown" aria-expanded="false">'. $_SESSION['loggedUser'] .'</button>
                  <ul class="dropdown-menu dropdown-menu-end bg-dark">
                  <li><a class="dropdown-item text-light" href="../profile/userProfile.php">View Profile</a></li>
                  <li><a class="dropdown-item text-light" href="../adminPanel/admin.php">View Users</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item text-light" href="../register/logout.php">Log Out</a></li>
                  </ul></div>';
                } else {
                  echo '<div class="btn-group dropdown nav-link active text-decoration-none">
                  <button type="button" class="btn dropdown-link dropdown-toggle active btn-transparent pt-0 pb-0" data-bs-toggle="dropdown" aria-expanded="false">'. $_SESSION['loggedUser'] .'</button>
                  <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item text-light" href="../profile/userProfile.php">View Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item text-light" href="../register/logout.php">Log Out</a></li>
                  </ul></div>';
                }
              } else {
                echo '
                <li>
                  <a href="../register/register.php" class="nav-link active contacts text-light"><b>LOG IN</b></a>
                </li>
                <li>
                  <a href="../register/signIn.php" class="nav-link active contacts text-light"><b>SIGN IN</b></a>
                </li>
                ';
              }
              ?>
              <div class="btn-group dropdown nav-link active text-decoration-none">
                <button type="button" class="navButton btn dropdown-link dropdown-toggle active btn-light btn-outline-dark pt-0 pb-0" data-bs-toggle="dropdown" aria-expanded="false">Cards</button>
                <ul class="dropdown-menu dropdown-menu-end bg-dark">
                  <li><a class="dropdown-item text-light" href="../cards/card-1.php">Card -1</a></li>
                  <li><a class="dropdown-item text-light" href="../cards/card0.php">Card 0</a></li>
                  <li><a class="dropdown-item text-light" href="../cards/card1.php">Card 1</a></li>
                  <li><a class="dropdown-item text-light" href="../cards/card2.php">Card 2</a></li>
                </ul>
              </div>
            </ul>
          </div>
        </div>
      </nav>
