<?php
session_start();
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
            <img class="campus_top_bilde" src="Bilder/Paa_Capmus/EksamensArrangement.jpg">
            <div class="top_text">
                <div class="top_text_head"><h3>Hva skjer på Campus</h3></div>
                <div class="top_text_main"><p>Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Ad architecto consectetur
                    cupiditate dolores in ipsam laboriosam, libero magni
                    molestias, neque non officiis perferendis quas
                    sapiente sed ut veniam. Animi, dolorem.</p></div>
            </div>
        </div>
    </div>
    <div class="pusterom"></div>

    <?php
    require "includes/aktuelt.php";
    ?>

    <?php
    require "includes/mass_holder.php";
    ?>

</div>

</body>
</html>