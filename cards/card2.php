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
                <div class="col-12 col-md-2"><h2 class="display-6">Level 2</h2>
                <table>
                    <caption class="text-white">Legend</caption>
                    <tbody>
                        <tr>
                            <td class="red-expo-bgr" style="height: 350px;">&nbsp;&nbsp;&nbsp;</td>
                            <td class="px-2"><strong>Paintings / Northern Europe</strong><br>(1350–1650)</td><br>
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
            const image = L.imageOverlay('../maps/images/louvre-museum-map-level_2.jpg', bounds).addTo(map);

            const FrançoisI = xy(183, 159);
            const TheMoneyChangerAndHisWife = xy(159, 159);
            const TheLacemaker = xy(116, 137);
            const TheCheat = xy(240, 131);
            const PavillonDelHorloge = xy(220,90);
            const TheBather = xy(247,52);


            const mFrançoisI = L.marker(FrançoisI).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Paintings / France</p><div class="expo-container red-expo-bgr text-black"><img src="../maps/images/François.jpg"><b>François I</b>822</div>');
            const MoneyChangerAndHisWife = L.marker(TheMoneyChangerAndHisWife).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Paintings /<br>Northern Europe</p><div class="expo-container red-expo-bgr text-black"><img src="../maps/images/Money_Chang.jpg"><b>The Money Changer<br>and his Wife</b>814</div>');
            const mTheLacemaker = L.marker(TheLacemaker).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Paintings /<br>Northern Europe</p><div class="expo-container red-expo-bgr text-black"><img src="../maps/images/Lacemaker.jpg"><b>The Lacemaker</b>837</div>');
            const mTheCheat = L.marker(TheCheat).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Paintings / France</p><div class="expo-container red-expo-bgr text-black"><img src="../maps/images/Cheat.jpg"><b>The Cheat</b>912</div>');
            const mPavillonDelHorloge = L.marker(PavillonDelHorloge).addTo(map).bindPopup('<p class="text-center fw-bold m-0">History of the Louvre</p><div class="expo-container brown-expo-bgr text-black"><img src="../maps/images/Pavillon.jpg">900</div>');
            const mTheBather = L.marker(TheBather).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Paintings / France</p><div class="expo-container red-expo-bgr text-black"><img src="../maps/images/Bather.jpg"><b>The Bather</b>940</div>');

            map.setView(xy(170, 100), 1);
        
    </script>
    <?php include("../footer/footerCards.php");?>

    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html>