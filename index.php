<?php
    require "vendor/autoload.php";
    require "config.php";

    $slides = Slide::all();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="includes/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <title>PROTOTYPE</title>

</head>
<body>

<!-- Slideshow -->
<div class="slideshowContainer">

    <?php
        foreach ($slides as $slide)
        {
            require "includes/slideshow.php";
        }
    ?>

    <a class="previousSlide" onclick="slidesFunction(-1)">&#10094;</a>
    <a class="nextSlide" onclick="slidesFunction(1)">&#10095;</a>
</div>

<!-- Main window -->
<div id="container">

</div>
</body>
</html>