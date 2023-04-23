<?php 
session_start();
$_SESSION['last_page'] = $_SERVER['REQUEST_URI'];
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
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300&family=Kdam+Thmor+Pro&family=Unica+One&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/x-icon" href="../images/favIcon.png">
    <link rel="stylesheet" href="leaflet/leaflet.css">
    <title>Contacts</title>
  </head>
  <body class="bg-dark text-white">
    <main>
      <!-- Nav Bar -->
      <?php include('../navBar/navCont.php'); ?>
      <!-- Contact Us-->
      <div
        class="modal modal-sheet position-static d-block bg-dark py-5"
        tabindex="-1"
        role="dialog"
        id="modalSheet"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header border-bottom-0">
              <h5 class="modal-title text-dark">GENERAL INFORMATION</h5>
            </div>
            <div class="modal-body py-0">
              <p class="text-dark">
                For general questions, requests for information or to send us
                feedback, please contact us <br><br> by email at : info@louvre.fr <br><br>or call
                us on : +33 (0)1 40 20 53 17 during museum opening hours.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="map" style="height: 500px; width: 500px; width: 50%; margin: 0 auto;"></div>
       <!-- Footer -->
       <?php include('../footer/footerCont.php'); ?>
    </main>
    <script>
    function initMap() {
      var map = L.map('map', {
        crs: L.CRS.Simple,
        minZoom: -5
      });
      var bounds = [[0,0], [1000,1000]];
      var image = L.imageOverlay('louvre-museum-map-level-1.jpg', bounds).addTo(map);
      var sol = L.latLng([ 145, 175.2 ]);
      
      L.marker(sol).addTo(map).bindPopup('Something');
      map.setView( [70, 120], 1);
    }
  
    window.onload = function() {
      initMap();
      };
    </script>
    <script src="leaflet/leaflet.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
