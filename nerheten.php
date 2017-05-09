<?php
require "vendor/autoload.php";
require "config.php";

require "includes/header.php";

?>


<div id="container">

    <?php
    require "includes/header_link.php";
    ?>

    <div class="campus_top_holder">
        <div class="campus_top">
            <img class="campus_top_bilde" src="Bilder/I_Naerheten/AkerselvaINaerheten.jpg">
            <div class="top_text">
                <div class="top_text_head"><h3>Hva skjer i nærheten</h3></div>
                <div class="top_text_main"><p>Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Ad architecto consectetur
                        cupiditate dolores in ipsam laboriosam, libero magni
                        molestias, neque non officiis perferendis quas
                        sapiente sed ut veniam. Animi, dolorem.</p></div>
            </div>
        </div>
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

</body>
</html>