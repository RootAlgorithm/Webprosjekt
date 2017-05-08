<?php
require "vendor/autoload.php";
require "config.php";

require "includes/header.php";

?>


<div class="container">

    <img src="Bilder/Studenter.jpg" class="minside_bilde">

    <?php
    require "includes/header_link.php";
    ?>


    <form class="minside_schema">
            <label for="fname">Brukernavn</label>
            <input type="text" id="fname" name="brukernavn" placeholder="Brukernavn...">

            <label for="fname">Epost</label>
            <input type="text" id="epost" name="epost" placeholder="Epost...">

            <label for="fname">Fornavn</label>
            <input type="text" id="fname" name="fornavn" placeholder="Fornanvn...">

            <label for="fname">Etternavn</label>
            <input type="text" id="ename" name="etternavn" placeholder="Etternavn...">

            <label for="fname">Passord</label>
            <input type="password" id="passord" name="passord" placeholder="Passord...">

            <label for="fname">Gjennta passord</label>
            <input type="password" id="password2" name="gjenntapassord" placeholder="Gjennta passord...">

            <input type="submit" value="Submit">
    </form>

</div>

</body>
</html>