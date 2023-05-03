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
    <title>Cards</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300&family=Kdam+Thmor+Pro&family=Unica+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="cards.css">
    <link rel="icon" type="image/x-icon" href="../images/favIcon.png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    
</head>
<body class="h-100 bg-dark text-white">
  <?php include("../navBar/navCards.php");?>
  <div class=" container-fluid d-flex justify-content-center align-items-center py-5 text-center bgr-r-image h-100" style="background-image: url('../images/theLouvreExhibits.jpg');">
    <div>
      <h1 class="fw-light text-dark">Добре дошли в карти!</h1>
      <p class="lead text-body-secondary text-dark">Тук можете да видите карти с разположението <br> на всеки експонат в Лувъра</p>
    </div>
  </div>


  <main>
        <div class="container">
            <h1 class="my-5">LOUVRE MAPS</h1>

            <div class="row">
                <div class="col-12 col-md-2"><h2 class="display-6">Level 0</h2>
                <table>
                    <caption class="text-white">Legend</caption>
                    <tbody>
                        <tr>
                            <td class="gray-expo-bgr">&nbsp;&nbsp;&nbsp;</td>
                            <td class="px-2"><strong>Sculptures / France</strong><br>(500-1850)</td>
                        </tr>
                        <tr>
                            <td class="yellow-expo-bgr">&nbsp;&nbsp;&nbsp;</td>
                            <td class="px-2"><strong>Near Eastern Antiquities</strong><br>(7500 BC-AD 500)</td>
                        </tr>
                        <tr>
                            <td class="green-expo-bgr">&nbsp;&nbsp;&nbsp;</td>
                            <td class="px-2"><strong>Egyptian Antiquities</strong> <br>(4000-30 BC)</td>
                        </tr>
                            <td class="blue-expo-bgr">&nbsp;&nbsp;&nbsp;</td>
                            <td class="px-2"><strong>Roman Antiquities</strong> <br>(100 BC-AD 500)</td>
                         </tr>
                </table>
                
                </div>
                <div class="col-12 col-md-10">
                    <div id="map"></div>

                </div>
            </div>
  
        </div>
    </main>
 
    <script>
        const map = L.map('map', {
                crs: L.CRS.Simple,
                minZoom: -10
            });

            const yx = L.latLng;

            function xy(x, y) {
                if (Array.isArray(x)) { 
                    return yx(x[1], x[0]);
                }
                return yx(y, x); 
            }

            const bounds = [xy(0, 0), xy(320, 200)];
            const image = L.imageOverlay('../maps/images/louvre-museum-map-level_0.jpg', bounds).addTo(map);

            const ChristDetached = xy(118, 139);
            const StatueOfEbih = xy(175, 136);
            const ThePalaceOfDarius = xy(244, 136);
            const StatueOfMarcellus = xy(199, 29);
            const TheDyingSlave = xy(121, 58);
            const SculptureFromMaloIsland = xy(24, 29);


            const mChristDetached = L.marker(ChristDetached).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Sculptures / France</p><div class="expo-container gray-expo-bgr text-black"><img src="../maps/images/Christ_Detached.jpg"><b>Christ Detached from the Cross</b>201</div>');
            const mStatueOfEbih = L.marker(StatueOfEbih).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Near Eastern<br>Antiquities</p><div class="expo-container yellow-expo-bgr text-black"><img src="../maps/images/Statue_Ebih.jpg"><b>Statue of Ebih-Il</b>236</div>');
            const mThePalaceOfDarius = L.marker(ThePalaceOfDarius).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Near Eastern<br>Antiquities</p><div class="expo-container yellow-expo-bgr text-black"><img src="../maps/images/palace_Darius.jpg"><b>The Palace of Darius</b>308</div>');
            const mStatueOfMarcellus = L.marker(StatueOfMarcellus).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Roman Antiquities</p><div class="expo-container blue-expo-bgr text-black"><img src="../maps/images/Statue_Marcellus.jpg"><b>Statue of Marcellus</b>410</div>');
            const mTheDyingSlave = L.marker(TheDyingSlave).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Sculptures /Europe</p><div class="expo-container gray-expo-bgr text-black"><img src="../maps/images/Dying_Slave.jpg"><b>The Dying Slave</b>403</div>');
            const mSculptureFromMaloIsland = L.marker(SculptureFromMaloIsland).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Arts of Africa,<br>Asia,Oceania and<br>the Americas</p><div class="expo-container text-black"><img src="../maps/images/Sculpture_Malo_Island.jpg"><b>Sculpture from<br>Malo Island</b>427</div>');

            map.setView(xy(170, 100), 1);
        
    </script>
    <?php include("../footer/footerCards.php");?>

    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html>