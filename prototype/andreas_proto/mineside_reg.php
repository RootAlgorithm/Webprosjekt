<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        
        <title>Andreas sin prototype</title>

    </head>
    <body>
        <div id="container">
            
            <div id="header_under"></div>
                
            <div class="innloggReg">
                <h1>Registrer brukeren din</h1>
                <div>
                    <label for="fname">Navn</label>
                    <input type="text" id="fname" name="firstname" placeholder="Dit navn..">

                    <label for="epost">Epost</label>
                    <input type="text" id="epost" name="Epost" placeholder="Din epost..">
                    
                    <label for="epost">Passord</label>
                    <input type="password" id="passord" name="Passord" placeholder="Ditt passord...">
                    
                    <label for="epost">Gjenta passord</label>
                    <input type="password" id="passordGjenta" name="PassordGjennta" placeholder="Ditt passord på nytt...">

                    <a href="minside_hoved.php"><input type="submit" value="Send Inn"></a>
                </div>
                
            </div>
            
            <div id="header_body">
                <div id="header_innmat">
                    <a href="index.php"><div class="header_link">Startside</div></a>
                    <a href="rabatt.php"><div class="header_link">Rabatter</div></a>
                    <a href="omradet.php"><div class="header_link">Området</div></a>
                    <a href="campus.php"><div class="header_link">Om Campus</div></a>
                    <a href="mineside_innlog.php"><div class="header_link">Min Side</div></a>
                </div>
            </div>
            
        </div>
    </body>
</html>