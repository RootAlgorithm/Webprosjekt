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

<?php
require "includes/footer.php";
?>