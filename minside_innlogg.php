<?php

require "includes/header.php";

?>


<div class="container">

    <img src="Bilder/Studenter.jpg" class="minside_bilde">
    <?php
    require "includes/header_link.php";
    ?>


    <form class="minside_schema" action="includes/authUser.php" method="post">
        <label for="fname">Brukernavn</label>
        <input type="text" id="fname" name="brukernavn" placeholder="Brukernavn...">

        <label for="password">Passord</label>
        <input type="password" id="password" name="passord" placeholder="Passord...">

        <input type="submit" value="Submit">

        <a href="minside_reg.php"><p>Ikke bruker? Klikk her!</p></a>
    </form>



<?php
require "includes/footer.php";
?>