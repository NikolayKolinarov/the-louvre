<?php 
session_start();
$_SESSION['last_page'] = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300&family=Kdam+Thmor+Pro&family=Unica+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="home/home.css">
    <link rel="icon" type="image/x-icon" href="images/favIcon.png">
  </head>
  <body class="bg-dark text-white h-100">
      <!-- Nav Bar -->
      <?php include('navBar/navHome.php'); ?>
      <!-- Header-->
     <div class="py-5 text-center container-fluid bgr-r-image h-100" style="background-image: url('images/theLouvreHome.jpg');"></div>
    <main>
      <!-- Heroes -->
      <div class="container col-xxl-8 px-4 py-5" id="about">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img
              src="images/theLouver.jpg"
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
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" style="background-image: url('images/mona-lisa.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h2 class="pt-5 mt-5 mb-4  display-6 lh-1 fw-bold">Mona Lisa by Leonardo da Vinci (Denon Wing, Room 711)</h2>
              </div>
            </div>
          </div>
    
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" style="background-image: url('images/france-louvre-wedding-at-cana.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Les Noces de Cana by Véronèse (Denon Wing, Room 711)</h2>
              </div>
            </div>
          </div>
    
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" style="background-image: url('images/france-louvre-napoleons-coronation.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Le Sacre de l'Empereur Napoléon Ier by Jacques-Louis David (Denon Wing, Room 702)</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <!-- Footer -->
      <?php include('footer/footerHome.php'); ?>
    </main>
    
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>  
    <script src="home/script.js"></script>
  </body>
</html>
