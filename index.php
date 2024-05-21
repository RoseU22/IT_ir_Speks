<!DOCTYPE html>
<html lang="lv">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

                <img src="assets/images/placeholder.jpeg" alt="">
                <h3>Vakance 1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aperiam ipsa nihil. Excepturi ab omnis sed veritatis soluta minus iste. Quidem quas officiis doloribus, pariatur expedita reiciendis distinctio nulla ullam!</p>

            </div>

            <div class="box">

                <img src="assets/images/placeholder.jpeg" alt="">
                <h3>Vakance 2</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus quam accusamus provident aperiam ipsam voluptatum est culpa, quasi officia sunt molestiae quibusdam temporibus asperiores reprehenderit sapiente fugiat amet a quos!</p>

            </div>

            <div class="box">

                <img src="assets/images/placeholder.jpeg" alt="">
                <h3>Vakance 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae repellat voluptas numquam eveniet culpa harum commodi ipsam pariatur incidunt cum aspernatur, fuga dolorum aliquam praesentium reprehenderit. Temporibus incidunt error ratione?</p>

            </div>

        </div>

<<<<<<< HEAD
        <div class="kreep">
            <button onclick="location.href='vakances.php'">Parādīt vēl!</button>
        </div>   
=======
        <button>Parādīt vēl</button>    
>>>>>>> 72edb4cb8b9ff9b670f064b8e419c3b41fbc64ec

    </section>

    <section id="parmums">

<<<<<<< HEAD
        <div class="informacija">

            <h1>Par <span>Mums!</span></h1>

            <p>Mēs sniedzam jaunas iespējas katram cilvēkam, piedāvājot vakances, kuras ir atrodamas apkārt visai Latvijai. Mūsu mērķis ir palīdzēt cilvēkiem atrast brīvas vakances, kuras tiek piedāvātas šeit priekš ērtas meklēšanas un atrašanas.</p>

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
=======
        <h1>IT ir <span>Spēks!</span></h1>
>>>>>>> 72edb4cb8b9ff9b670f064b8e419c3b41fbc64ec

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
