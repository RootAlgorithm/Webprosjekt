<?php
require "vendor/autoload.php";
require "config.php";

require "includes/header.php";

?>


<div id="container">


    <?php
    require "includes/header_link.php";
    ?>

    <img class="minside_bilde" src="Bilder/Studenter.jpg">
    <div class="minside_schema">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="brukernavn" placeholder="Brukernavn...">

        <label for="fname">First Name</label>
        <input type="text" id="epost" name="epost" placeholder="Epost...">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fornavn" placeholder="Fornanvn...">

        <label for="fname">First Name</label>
        <input type="text" id="ename" name="etternavn" placeholder="Etternavn...">

        <label for="fname">First Name</label>
        <input type="password" id="passord" name="passord" placeholder="Passord...">

        <label for="fname">First Name</label>
        <input type="password" id="password2" name="gjenntapassord" placeholder="Gjennta passord...">

        <input type="submit" value="Submit">
    </div>


</div>

</body>
</html>