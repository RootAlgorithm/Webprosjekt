<html>
	<head>
		<title>PHP Test</title>
	</head>
	<body>
	<?php echo '<h1>Foreløpig testside</h1>'; ?>
	<?php echo '<p>Om du ser dette så funker PHP greit på denne serveren</p><br>'; ?>
	<?php echo '<p>Jeg jobber kontinuerlig med å få implementert et enkelt Content Management System (CMS)</p><br>'; ?>
    <?php echo '<p>Prøver på nytt</p><br>'; ?>
        
    <?php 
        $andreas = 'kul';
        $kul = "Ja!";
        echo $$andreas;
    ?>
        
        <?php
        require 'config.php';
        echo '<img src="'.$image_path.'header.png"/>';
        ?>
        <div>
            <p>Nå har Andreas også vært innom.</p>
        </div>
	</body>
</html>
