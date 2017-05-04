<?php
require "vendor/autoload.php";
require "config.php";

require "includes/header.php";

?>


<div id="container">


    <?php
    require "includes/header_link.php";
    ?>


    <div class="minside_schema">

        <input type="text" id="fname" name="brukernavn" placeholder="Brukernavn...">


        <input type="text" id="epost" name="epost" placeholder="Epost...">


        <input type="text" id="fname" name="fornavn" placeholder="Fornanvn...">


        <input type="text" id="ename" name="etternavn" placeholder="Etternavn...">


        <input type="password" id="passord" name="passord" placeholder="Passord...">


        <input type="password" id="password2" name="gjenntapassord" placeholder="Gjennta passord...">
    </div>
    <img class="minside_bilde" src="Bilder/Studenter.jpg">

</div>

</body>
</html>