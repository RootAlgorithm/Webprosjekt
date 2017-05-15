<?php
session_start();
require "vendor/autoload.php";
require "config.php";

require "includes/header.php";

?>


<div id="container">

    <?php
    require "includes/header_link.php";
    ?>

    <div class="minside_hoved">
        <img class="minside_hoved_bilde" src="#">

        <div class="pusterom"></div>
        <hr class="linje_skift">

        <div class="minside_ommeg">
            <h1>Om meg</h1>
            <div class="minside_ommeg_text"></div>
        </div>

        <div class="pusterom"></div>
        <hr class="linje_skift">

        <div class="minside_tags">
            <h1>Mine tags</h1>
            <div class="minside_tags_text"></div>
        </div>

        <div class="pusterom"></div>
        <hr class="linje_skift">

        <div class="minside_oppdater">
            <h1>Oppdater opplysninger</h1>
            <form class="minside_schema_tags">
                <label class="label" for="uname">Brukernavn</label>
                <input type="text" id="uname" name="brukernavn" placeholder="Brukernavn...">

                <label class="label" for="epost">E-post</label>
                <input type="text" id="epost" name="epost" placeholder="Epost...">

                <label class="label" for="fname">Fornavn</label>
                <input type="text" id="fname" name="fornavn" placeholder="Fornanvn...">

                <label class="label" for="lname">Etternavn</label>
                <input type="text" id="lname" name="etternavn" placeholder="Etternavn...">

                <label class="label" for="passord">Passord</label>
                <input type="password" id="passord" name="passord" placeholder="Passord...">

                <label class="label" for="password2">Gjenta passord</label>
                <input type="password" id="password2" name="gjentapassord" placeholder="Gjenta passord...">

                <input type="submit" value="Oppdater">
            </form>
        </div>

        <div class="pusterom"></div>
    </div>

</div>

</body>
</html>