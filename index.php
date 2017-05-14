<?php
session_start(["username"]);
require "vendor/autoload.php";
require "config.php";

$slides = Slide::all();
$lesmer = Lesmer::all();

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

            <?php

            foreach ($lesmer as $lesme){
                    require "includes/lesmercards.php";
                }

            ?>

        </div>


        <div class="aktuelt">
            <img class="aktuelt_bilde" src="Bilder/Symboler/aktuelt.png">
            <div class="aktuelt_top"></div>
            <div class="aktuelt_menu">
                <div class="aktuelt_menu_knapp">Alle kategorier</div>
                <div class="aktuelt_menu_knapp">Rabatter</div>
                <div class="aktuelt_menu_knapp">Stillinger</div>
                <div class="aktuelt_menu_knapp">Restauranter</div>
            </div>
            <div class="aktuelt_innhold">
                <div class="aktuelt_innhold_card">
                    <img class="aktuelt_innhold_card_bilde" src="Bilder/I_Naerheten/AktivitetBotaniskHage.png">
                    <div class="aktuelt_innhold_card_head">Aktiviteter</div>
                    <div class="aktuelt_innhold_card_text"><p>Botianisk Hage</p></div>
                </div>
                <div class="aktuelt_innhold_card">
                    <img class="aktuelt_innhold_card_bilde" src="Bilder/Studenter.jpg">
                    <div class="aktuelt_innhold_card_head">Stilling</div>
                    <div class="aktuelt_innhold_card_text"><p>Øvingslærer PGR101</p></div>
                </div>
                <div class="aktuelt_innhold_card">
                    <img class="aktuelt_innhold_card_bilde" src="Bilder/Paa_Capmus/SjakkForedning.jpg">
                    <div class="aktuelt_innhold_card_head">Elektronikk</div>
                    <div class="aktuelt_innhold_card_text"><p>GamersGames.no</p></div>
                </div>
            </div>
        </div>

    </div>

<?php
require "includes/footer.php";
?>