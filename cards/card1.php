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
                <div class="col-12 col-md-2"><h2 class="display-6">Level 1</h2>
                <table>
                    <caption class="text-white">Legend</caption>
                    <tbody>
                        <tr>
                            <td class="red-expo-bgr">&nbsp;&nbsp;&nbsp;</td>
                            <td class="px-2"><strong>Paintings / France</strong><br>(1350–1650)</td>
                        </tr>
                        <tr>
                            <td class="magenta-expo-bgr">&nbsp;&nbsp;&nbsp;</td>
                            <td class="px-2"><strong>Decorative Arts / Europe</strong><br>(1650–1800)</td>
                        </tr>
                        <tr>
                            <td class="blue-expo-bgr">&nbsp;&nbsp;&nbsp;</td>
                            <td class="px-2"><strong>Greek, Etruscan and Italic Antiquities</strong> <br>(1000 BC–AD 500)</td>
                        </tr>
                            <td class="green-expo-bgr">&nbsp;&nbsp;&nbsp;</td>
                            <td class="px-2"><strong>Egyptian Antiquities</strong> <br>(4000–30 BC)</td>
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
            const image = L.imageOverlay('../maps/images/louvre-museum-map-level_1.jpg', bounds).addTo(map);

            const MonaLisa = xy(165, 50);
            const LibertyLeading = xy(147, 62);
            const FrenchCrown = xy(217,56);
            const TheWingedVictoryOfSamothrace = xy(209,59);
            const SarcophagusofTheSpouses = xy(239,59);
            const Euphronios = xy(295,58);
            const PavillonDelHorloge = xy(234,98);
            const TheClubfoot = xy(50,37);
            const ConversationInAPark = xy(126,41);
            const VirginOfJeanneEvreux = xy(164,150);
            const NapoleonIIIApartments = xy(127,133);


            const mMonaLisa = L.marker(MonaLisa).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Paintings/Italy</p><div class="expo-container red-expo-bgr text-black"><img src="../maps/images/Mona_Lisa.png"><b>Mona Lisa</b>711</div>');
            const mLibertyLeading = L.marker(LibertyLeading).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Paintings/France</p><div class="expo-container red-expo-bgr text-black"><img src="../maps/images/Liberty_Leading.jpg"><b>Liberty Leading the People</b>700</div>');
            const mFrenchCrown = L.marker(FrenchCrown).addTo(map).bindPopup('<p class="text-center fw-bold m-0">The Galerie<br>d’Apollon</p><div class="expo-container magenta-expo-bgr text-black"><img src="../maps/images/Crown_Jewels.jpg"><b>The French Crown Jewels</b>705</div>');
            const mWingedVictoryOfSamothrace = L.marker(TheWingedVictoryOfSamothrace).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Greek Antiquities</p><div class="expo-container blue-expo-bgr text-black"><img src="../maps/images/Winged_Victory.jpg"><b>Lisa The Winged Victory<br>of Samothrace</b>703</div>');
            const mSarcophagusofTheSpouses = L.marker(SarcophagusofTheSpouses).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Etruscan and <br>Italic Antiquities</p><div class="expo-container blue-expo-bgr text-black"><img src="../maps/images/Sarcophagus.jpg"><b>The Sarcophagus<br>of the Spouses</b>663</div>');
            const mEuphronios = L.marker(Euphronios).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Greek and<br>Roman Antiquities</p><div class="expo-container blue-expo-bgr text-black"><img src="../maps/images/Euphronios_krater.jpg"><b>The Euphronios<br>krater</b>651</div>');
            const mPavillonDelHorloge = L.marker(PavillonDelHorloge).addTo(map).bindPopup('<p class="text-center fw-bold m-0">History of the Louvre</p><div class="expo-container brown-expo-bgr text-black"><img src="../maps/images/Pavillon.jpg">600</div>');
            const mClubfoot = L.marker(TheClubfoot).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Paintings /<br>Spain</p><div class="expo-container red-expo-bgr text-black"><img src="../maps/images/Clubfoot.jpg"><b>The Clubfoot</b>718</div>');
            const mConversationInAPark = L.marker(ConversationInAPark).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Paintings /<br>Great Britain /<br>United States</p><div class="expo-container red-expo-bgr text-black"><img src="../maps/images/Conversation_Park.jpg"><b>Conversation<br>in a Park</b>713</div>');
            const mVirginOfJeanneEvreux = L.marker(VirginOfJeanneEvreux).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Decorative Arts /<br>Europe</p><div class="expo-container magenta-expo-bgr text-black"><img src="../maps/images/Virgin_Jeanne.jpg"><b>The Virgin of<br>Jeanne d’Evreux</b>503</div>');
            const mNapoleonIIIApartments = L.marker(NapoleonIIIApartments).addTo(map).bindPopup('<p class="text-center fw-bold m-0">Decorative Arts /<br>Europe</p><div class="expo-container magenta-expo-bgr text-black"><img src="../maps/images/Napoleon_Apartments.jpg"><b>Napoleon III<br>Apartments</b>544</div>');

            map.setView(xy(170, 100), 1);
        
    </script>
    <?php include("../footer/footerCards.php");?>

    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html>