<div class="header_body" xmlns="http://www.w3.org/1999/html">
        <a href="index.php"><img class="header_icon" src="Bilder/Symboler/LogoV3.png"></a>
        <div class="header_btn">
            <a href="minside_innlogg.php"><div class="header_btn_ting"></br>Min side</div></a>
            <a href="nerheten.php"><div class="header_btn_ting"></br>I nærheten</div></a>
            <a href="rabatt.php"><div class="header_btn_ting"></br>Rabatter</div></a>
            <a href="campus.php"><div class="header_btn_ting"></br>På campus</div></a>
            <?php
            if(isset($_SESSION['user'])) {
                echo '<a href="minside.php"><div class ="header_btn_ting"></br>'.$_SESSION['user'].'</div></a>';
            }
            ?>
        </div>
</div>