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

require "includes/header_link.php";

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

        <div class="pusterom"></div>

        <?php
            require "includes/aktuelt.php";
        ?>

    </div>

<?php
require "includes/footer.php";
?>