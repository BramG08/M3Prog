<?php
$title = "Mijn mooie website";
$datum = date('d-m-Y');
$tijd = date('H:i');
$FavorieteGame = "NBA2K";
$mooisteGetal = 21;
$favorieteShow = "Pokemon";
$leuksteStad = "Hamburg";
?>


<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?php echo $datum?>, en de tijd is<?php echo $tijd?> uur.
        
        <p><h2>Mijn favoriete game</h2><?php echo $FavorieteGame;?></p>
        <p><h2>Mijn mooiste getal</h2><?=$mooisteGetal;?></p>
        <p><h2>Mijn favoriete show</h2><?=$favorieteShow;?></p>
        <p><h2>Mijn leukste stad</h2><?=$leuksteStad;?></p>
    </body>
</html>