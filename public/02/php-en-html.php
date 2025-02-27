<?php 
$nameTitle = "Een php html voorbeeld pagina";
$afbeelding = "https://www.fool.ca/wp-content/uploads/2024/09/stocks-climbing-green-bull-market-1200x900.jpg";
$auteur = "BramG08";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
    <h1><?=$nameTitle;?></h1>
    <img src="<?php echo $afbeelding;?>" alt="<?=$nameTitle;?>">
    <p>Deze pagina is gemaakt door <?=$auteur;?></p>
</main>
</body>
</html>