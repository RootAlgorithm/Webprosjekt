<?php
session_start(["username"]);
require "vendor/autoload.php";
require "config.php";
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
        <img class="artikkel_bilde" src="Bilder/I_Naerheten/KonsertArrangement.jpg">
        <div class="artikkel_text">
            <div class="artikkel_text_head"><h1>Head</h1></div>
            <div class="artikkel_text_tekst"><p>Tekst, super tekst</p></div>    
            <div class="artikkel_text_dato"><p><b>Dato: </b>En eller annen dag</p></div>
            <div class="artikkel_text_sted"><p><b>Sted: </b>Et eller annet sted</p></div>
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