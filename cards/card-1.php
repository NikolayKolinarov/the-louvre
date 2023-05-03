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
                <div class="col-12 col-md-2"><h2 class="display-6">Level -1</h2>
                <table>
                    <caption class="text-white">Legend</caption>
                    <tbody>
                        <tr>
                            <td class="gray-expo-bgr" style="height: 70px;">&nbsp;&nbsp;&nbsp;</td>
                            <td class="px-2"><strong>Sculptures / France</strong><br>(1600–1700)</td>
                        </tr>
                        <tr>
                            <td class="peach-expo-bgr" style="height: 70px;">&nbsp;&nbsp;&nbsp;</td>
                            <td class="px-2"><strong>Cabinet of Prints and Drawings</strong></td><br>
                        </tr>
                        <tr>
                            <td class="blue-expo-bgr" style="height: 70px;">&nbsp;&nbsp;&nbsp;</td>
                            <td class="px-2"><strong>Greek Antiquities</strong><br>(6500-500 BC)</td>
                        </tr>
                        <tr>
                            <td class="cian-expo-bgr" style="height: 70px;">&nbsp;&nbsp;&nbsp;</td>
                            <td class="px-2"><strong>Islamic Art</strong><br>(700-1800)</td>
                        </tr>
                        <tr>
                            <td class="yellow-expo-bgr" style="height: 70px;">&nbsp;&nbsp;&nbsp;</td>
                            <td class="px-2"><strong>Near Eastern and Egyptian Art</strong><br>(30 BC-AD 1800)</td>
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
            const image = L.imageOverlay('../maps/images/louvre-museum-map-level_-1.jpg', bounds).addTo(map);

            const TheMarlyHorses = xy(118, 153);
            const CabinetPrintDrawings = xy(196, 96);
            const PavillonDelHorloge = xy(234,98);
            const CycladicIdol = xy(172,59);
            const MaryMagdalene = xy(107,35);
            const LEuropéennealene = xy(143,34);
            const PanelDepicting = xy(161,40);
            const LEuropéenne = xy(144,34);

            const mMarlyHorses = L.marker(TheMarlyHorses).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Sculptures / France</p><div class="expo-container gray-expo-bgr text-black"><img src="../maps/images/Marly_Horses.jpg"><b>The Marly Horses</b>102</div>');
            const mCabinetPrintDrawings = L.marker(CabinetPrintDrawings).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Cabinet of Print<br>and Drawings</p><div class="expo-container peach-expo-bgr text-black"><img src="../maps/images/Prints_Drawings.jpg">131</div>');
            const mPavillonDelHorloge = L.marker(PavillonDelHorloge).addTo(map).bindPopup('<p class="text-center fw-bold m-0">History of the Louvre</p><div class="expo-container brown-expo-bgr text-black"><img src="../maps/images/Pavillon.jpg">133</div>');
            const mCycladicIdol = L.marker(CycladicIdol).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Greek<br>Antiquities</p><div class="expo-container blue-expo-bgr text-black"><img src="../maps/images/Cycladic_idol.jpg"><b>Cycladic idol</b>170</div>');
            const mMaryMagdalene = L.marker(MaryMagdalene).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Sculptures /<br>Europe</p><div class="expo-container gray-expo-bgr text-black"><img src="../maps/images/Saint_Mary.jpg"><b>Saint Mary Magdalene</b>169</div>');
            const mPanelDepicting = L.marker(PanelDepicting).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Islamic Art</p><div class="expo-container cian-expo-bgr text-black"><img src="../maps/images/Panel_depicting.jpg"><b>Panel depicting<br>a poetry contest</b>186</div>');
            const mLEuropéenne= L.marker(LEuropéenne).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Near Eastern<br>and Egyptian Art</p><div class="expo-container yellow-expo-bgr text-black"><img src="../maps/images/LEuropéenne.jpg"><b>‘L’Européenne’</b>183</div>');


            map.setView(xy(170, 100), 1);
        
    </script>
    <?php include("../footer/footerCards.php");?>

    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html>