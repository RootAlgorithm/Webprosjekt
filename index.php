<?php
    require "vendor/autoload.php";
    require "config.php";


    $slides = Slide::all();
    ?>

<?php
require "includes/header.php";
?>


<!-- Slideshow -->
<?php

if(!$slides->isEmpty())
{ ?>

<div class="slideshowContainer">

    <?php

        foreach ($slides as $slide)
        {
            require "includes/slideshow.php";
        }
    ?>

    <a class="previousSlide" onclick="slidesFunction(-1)">&#10094;</a>
    <a class="nextSlide" onclick="slidesFunction(1)">&#10095;</a>
    <script src="includes/slideshow.js"></script>
</div>

<?php } ?>

<!-- Main window -->

    <div id="container">

        <div class="header_body">
            <div class="header_icon"><a href="index.php"><img src="Bilder/logo_v2.png"></a></div>
            <div class="header_btn">
                <div class="header_btn_ting"><a href="minside.php"><input type="header" value="Min Side"></a></div>
                <div class="header_btn_ting"><a href="nerheten.php"><input type="header" value="I nærheten"></a></div>
                <div class="header_btn_ting"><a href="rabatt.php"><input type="header" value="Rabatter"></a></div>
                <div class="header_btn_ting"><a href="campus.php"><input type="header" value="På Campus"></a></div>
            </div>
        </div>

        <div id="index_main_body">
            <div id="index_main_body_top">
                <img id="index_main_body_top_img" src="Bilder/campusfjerdingen-crop-u3130.jpg">
                <h1 class="index_main_body_top_text"><span class="span_text">Velkommen til Westedals studentinfo</span></h1>
                <p class="index_main_body_top_text"><span class="span_text">Her finner du informasjon relatert til studenter hos Westerdals
                        ved Campus Fjerdingen. <br/>Du vil finne flotte rabatter, tips,
                        arrangementer og mye mer!</span></p>

            </div>
            <div id="index_main_body_lesmer">
                <div class="index_main_body_lesmercard">
                    <img src="Bilder/rabattsymbol-crop-u3203.png">
                    <h3>Rabatter</h3>
                    <p>Her kan du se flotte rabatter <br/>
                        basert på dine interesser. Vi <br/>
                        oppdaterer hele tiden med <br/>
                        nye rabatter</p>
                    <input type="lesmercard" value="Les mer her!">
                </div>
                <div class="index_main_body_lesmercard">
                    <img src="Bilder/skolesymbol-crop-u3212.png">
                    <h3>Rabatter</h3>
                    <p>Se det som skjer på Camppus som er <br/>
                        interessant for akkurat deg, eller se gjennom <br/>
                        etter andre spennende ting som skjer!</p><br/>
                    <input type="lesmercard" value="Les mer her!">
                </div>
                <div class="index_main_body_lesmercard">
                    <img src="Bilder/geotag.png">
                    <h3>Rabatter</h3>
                    <p>Se hva som er og skjer i nærheten, <br/>
                        du finner alltid noe som er <br/>
                        interessant for akkurat deg</p><br/>
                    <input type="lesmercard" value="Les mer her!">
                </div>
                <div class="index_main_body_lesmercard">
                    <img src="Bilder/minsidesymbol-crop-u3206.png">
                    <h3>Rabatter</h3>
                    <p>Legg til dine interesser og <br/>
                        få innhold basert på dette</p><br/><br/>
                    <input type="lesmercard" value="Les mer her!">
                </div>

            </div>
        </div>

<?php
require "includes/footer.php";
?>