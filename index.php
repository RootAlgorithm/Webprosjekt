<?php
require "vendor/autoload.php";
require "config.php";


$slides = Slide::all();
?>

<?php
require "includes/header.php";
?>

    <!-- Main window -->

    <div class="container">

<?php

require "includes/header_link.php"

?>

    <div class="index_main_body">
        <?php

        if (!$slides->isEmpty())
        {

            foreach ($slides as $slide)
            {
                require "includes/slideshow.php";
            }

            ?>

            <a class="previousSlide" onclick="slidesFunction(-1)">&#10094;</a>
            <a class="nextSlide" onclick="slidesFunction(1)">&#10095;</a>
            <script src="includes/slideshow.js"></script>

        <?php } ?>


        <div class="index_main_body_lesmer">
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