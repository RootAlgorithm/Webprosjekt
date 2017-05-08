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

        <label for="fname">Passord</label>
        <input type="password" id="password" name="passord" placeholder="Passord...">

        <input type="submit" value="Submit">
    </form>



</div>

</body>
</html>