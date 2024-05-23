<!DOCTYPE html>
<html lang="lv">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href='assets/styles/main.css'>
    <link rel="stylesheet" href='assets/styles/footer.css'>

    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>IT ir Spēks</title>

</head>

<body>

    <header>

        <a href="#" class="logo">IT ir Spēks</a>

        <nav>
            <a href="#">Sākums</a>
            <a href="#jaunumi">Jaunumi</a>
            <a href="#vakances">Vakances</a>
            <a href="#parmums">Par mums</a>
            <a href="login.php">Autorizācija darbiniekiem</a>
        </nav>

        <div id="menu-bar" class="fas fa-bars"></div>

        <script src="assets/scripts/menu-bar.js"></script>

    </header>

    <section class="SakumlapasIevads">

        <div class="BildesContainer">

            <img src="assets/images/we_re-hiring_loop.gif">

            <!--Salabot pogu lai būtu responsīva-->

            <button onclick="location.href='#vakances'" type="button" class="hover-button">Pieejamās vakances!</button>

        </div>

        <div id="informacija">

            <div id="teksts">

                <h1>Vakances pieteikšanās visiem cilvēkiem</h1>

                <p>Iepazinies ar mūsu mājaslapu un atrodi sev piemērotāko vakanci, kuras tiek piedāvātas apkārt visai Latvijai.</p>

            </div>

        </div>

    </section>

    <section id="jaunumi">

        <h1>Jaunākie <span>jaunumi!</span></h1>

        <div class="carousel">

            <button class="arrow left-arrow" onclick="changeSlide(-1)">&#10094;</button>

            <div class="cloud"></div>

            <div class="carousel-container">

                <img src="assets/images/hiring.jpg" alt="" class="carousel-image">

                <p class="carousel-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus voluptatum cumque nemo accusamus alias sint suscipit quibusdam ex quas fuga?</p>

            </div>

            <button class="arrow right-arrow" onclick="changeSlide(1)">&#10095;</button>

        </div>

        <script src="assets/scripts/jaunumisadala.js"></script>
    
    </section>

    <section id="vakances">

        <h1>Pieejamās <span>vakances!</span></h1>

        <div class="box-container">

            <div class="box">

                <img src="assets/images/sanitars.jpg" alt="">
                <h3>Sanitārs</h3>
                <p>Galvenie darba pienākumi ir veikt telpu un ierīču uzkopšanu, apstrādi un dezinfekciju, veikt struktūrvienības telpu ģenerālo tīrīšanu u.c. </p>
                <button>Pieteikties</button>

            </div>

            <div class="box">

                <img src="assets/images/Apkopejs.jpg" alt="">
                <h3>Apkopējs</h3>
                <p>Galvenie darba pienākumi ir regulāri uzkopt iestādes vai dzīvojamās ēkas telpas, koridorus, kāpnes, telpu koplietošanas priekšmetus tīrīt logus un palodzes, mēbeles, grīdas, sienas, durvis, labierīcības priekšmetus u.tml.</p>
                <button>Pieteikties</button>

            </div>

            <div class="box">

                <img src="assets/images/atsledznieks.jpg" alt="">
                <h3>Atslēdznieks</h3>
                <p>Pienākumi - Pārraudzīt uzņēmuma ražošanas iekārtas - remontēšana, apkopšana. Prasības - Augsta atbildības sajūta; spēja patstāvīgi organizēt savu darbu, saprast dotos uzdevumus.</p>
                <button>Pieteikties</button>

            </div>

        </div>


        <div class="kreep">
            <button onclick="location.href='vakances.php'">Parādīt vēl!</button>
        </div>   

    </section>

    <section id="parmums">

        <div class="informacija">

            <h1>Par <span>Mums!</span></h1>

            <p>Mēs sniedzam jaunas iespējas katram cilvēkam, piedāvājot vakances, kuras ir atrodamas Latvijā. Mūsu mērķis ir palīdzēt cilvēkiem atrast vakances, kuras tiek piedāvātas šeit ērtai meklēšanai un atrašanai.</p>

        </div>

        <img src="assets/images/lookingforjob.png" alt="">

        <div class="kontakti">

            <h1>Kontakti</h1>

            <div class="box-container">

                <div class="icon">

                    <i class="fas fa-phone"></i>

                    <h3>Tālrunis</h3>

                    <p>+371 25 175 286</p>
                    
                </div>

                <div class="icon">

                    <i class="fas fa-envelope"></i>

                    <h3>E-pasts</h3>

                    <p>ITirSpeks@ITirSpeks.lv</p>
                    
                </div>

                <div class="icon">

                    <i class="fas fa-map-marker-alt"></i>

                    <h3>Adrese</h3>

                    <p>Ventspils iela 51, <br> Liepāja, LV-3405, Latvija</p>
                    
                </div>

            </div>

        </div>

    </section>

    <footer>

        <div class="loop-wrapper">
            <div class="mountain"></div>
            <div class="hill"></div>
            <div class="tree"></div>
            <div class="tree"></div>
            <div class="tree"></div>
            <div class="rock"></div>
            <div class="truck"></div>
            <div class="wheels"></div>
        </div> 
        
        <p>IT ir Spēks © 2024</p>
    
    </footer>
    
</body>
</html>
