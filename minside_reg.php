<?php
require "vendor/autoload.php";
require "config.php";

require "includes/header.php";

?>


<div class="container">

    <div class="minside_bilde">
    <?php
    require "includes/header_link.php";
    ?>


    <div class="minside_schema">
        <form action="includes/addUser.php">
        <label for="uname">Brukernavn</label>
        <input type="text" id="uname" name="brukernavn" placeholder="Brukernavn...">

        <label for="epost">E-post</label>
        <input type="text" id="epost" name="epost" placeholder="Epost...">

        <label for="fname">Fornavn</label>
        <input type="text" id="fname" name="fornavn" placeholder="Fornanvn...">

        <label for="lname">Etternavn</label>
        <input type="text" id="lname" name="etternavn" placeholder="Etternavn...">

        <label for="passord">Passord</label>
        <input type="password" id="passord" name="passord" placeholder="Passord...">

        <label for="password2">Gjenta passord</label>
        <input type="password" id="password2" name="gjentapassord" placeholder="Gjenta passord...">

        <input type="submit" value="Submit">
        </form>
    </div>
    </div>

</div>

</body>
</html>