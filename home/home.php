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
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
  </head>
  <body class="bg-dark text-white">
    <main>
      <!-- Nav Bar -->
      <nav
        class="navbar navbar-expand-lg navbar-light bg- fixed-top navbar-custom"
        aria-label="Fifth navbar example"
      >
        <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon navbar-dark bg-dark"></span>
      </button>

          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarsExample05"
          >
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
              <li>
                <a href="../adminPanel/admin.php" class="nav-link active contacts"><b>ADMIN</b></a>
              </li>
              <li>
                <a href="../register/logIn.php" class="nav-link active contacts"><b>LOGIN</b></a>
              </li>
              <li>
                <a href="../register/signIn.php" class="nav-link active contacts"><b>SIGNIN</b></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Carousel-->
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="true"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="../images/header3.png"
              class="d-block w-100 h-100"
              alt="Header 1"
            />
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="../images/header2.png"
              class="d-block w-100 h-100"
              alt="Header 2"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="../images/header1.png"
              class="d-block w-100 h-100"
              alt="Header 3"
            />
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="b-example-divider"></div>
      <!-- Heroes -->
      <div class="container col-xxl-8 px-4 py-5" id="about">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img
              src="../images/theLouver.jpg"
              class="d-block mx-lg-auto img-fluid shadow-lg rounded-3"
              alt="The Louvre"
              width="700"
              height="500"
              loading="lazy"
            />
          </div>
          <div class="col-lg-6 scroll-container">
            <h1 class="display-5 fw-bold lh-1 mb-3 titles">WELCOME TO THE LOUVRE</h1>
            <p class="lead">
              There are plenty of good reasons to visit the Louvre! So many
              works of art to discover in this fabulous museum that used to be a
              palace! So plan your visit in advance to make the most of it. Why
              not pick one of our visitor trails to follow a theme-based tour?
              And when you need a break, where better than the museum’s restful
              gardens?
            </p>
          </div>
        </div>
      </div>
      <div class="castleImg"></div>
      <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold titles">ABOUT THE LOUVRE</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">
            Louvre, in full Louvre Museum or French Musée du Louvre, official
            name Great Louvre or French Grand Louvre, national museum and art
            gallery of France, housed in part of a large palace in Paris that
            was built on the right-bank site of the 12th-century fortress of
            Philip Augustus. It is the world’s most-visited art museum, with a
            collection that spans work from ancient civilizations to the
            mid-19th century.
          </p>
        </div>
      </div>
      <div class="px-4 py-5 my-5">
        <h1 class="pb-2 fw-bold border-bottom titles">DON'T MISS</h1>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" style="background-image: url('../images/mona-lisa.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h2 class="pt-5 mt-5 mb-4  display-6 lh-1 fw-bold">Mona Lisa by Leonardo da Vinci (Denon Wing, Room 711)</h2>
              </div>
            </div>
          </div>
    
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" style="background-image: url('../images/france-louvre-wedding-at-cana.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Les Noces de Cana by Véronèse (Denon Wing, Room 711)</h2>
              </div>
            </div>
          </div>
    
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" style="background-image: url('../images/france-louvre-napoleons-coronation.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Le Sacre de l'Empereur Napoléon Ier by Jacques-Louis David (Denon Wing, Room 702)</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <!-- Footer -->
      <div class="container">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="footer-link px-2 text-white">Home</a></li>
            <li class="nav-item"><a href="#about" class="footer-link px-2 text-white">About</a></li>
            <li class="nav-item"><a href="../gallery/gallery.php" class="footer-link px-2 text-white">Gallery</a></li>
            <li class="nav-item"><a href="../contacts/contacts.php" class="footer-link px-2 text-white">Contacts</a></li>
            <li class="nav-item"><a href="../adminPanel/admin.php" class="footer-link px-2 text-white">Admin</a></li>
          </ul>
          <p class="text-center text-white">&copy; 2022 Nikolay Kolibarov</p>
        </footer>
      </div>
    </main>
    
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
