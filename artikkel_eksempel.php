<?php
session_start(["username"]);
require "vendor/autoload.php";
require "config.php";

$artikkel = artikler::all();

?>

<?php
require "includes/header.php";
?>

    <div class="container">

<?php
require "includes/header_link.php";
?>

    <div class="artikkel_body">
        <hr class="linje_skift">
        <div class="artikkel_body_top">
            <img class="artikkel_bilde" src="<?php echo $slide->getAttribute('artikkel_bilde') ?>">
            <div class="artikkel_text">
                <div class="artikkel_text_head"><h1><?php echo $slide->getAttribute('artikkel_head') ?></h1></div>
                <div class="artikkel_text_tekst"><p><?php echo $slide->getAttribute('artikkel_text') ?></p></div>
                <div class="artikkel_text_dato"><p><b>Dato: </b><?php echo $slide->getAttribute('artikkel_dato') ?></p></div>
                <div class="artikkel_text_sted"><p><b>Sted: </b><?php echo $slide->getAttribute('artikkel_sted') ?></p></div>
                <!--Endre eller ta bort hvis det ikke skal være med-->
            </div>
        </div>
        <div class="artikkel_body_bot">
            <div class="artikkel_tags">
                <div><p>Tags: </p></div>
                <!--Sett inn masse tags fra database elns-->
            </div>
            <!--kart er sånn i tilfelle vi skal implementere det-->
            <div class="artikkel_kart"></div>
        </div>
        <hr class="linje_skift">
    </div>

<?php
require "includes/footer.php";
?>