<?php
$TYPEGERECHT = "Hoofdgerecht";
$NAAMGERECHT = "Pizza Margherita";
$PRIJS = 8.50;
$BESCHRIJVING = "Een pizza met tomatensaus, mozzarella en basilicum";
$INGREDIENTENLIJST = "Tomatensaus, mozzarella, basilicum";
$ALLERGENENLIJST = "Gluten, lactose";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Menu</title>
</head>
<body>
    <h1>Gerecht</h1>
    <p>
    Gerecht type: <?=$TYPEGERECHT?><br>
  <br>
  <?=$NAAMGERECHT?> €<?=$PRIJS?><br>
  <br>
  <?=$BESCHRIJVING?><br>
  Ingegredientenlijst:<br>
  <?=$INGREDIENTENLIJST?><br>
  <br>
  Bent u allergisch? bekijk dan hieronder de allergenen:<br>
  <?=$ALLERGENENLIJST?><br>
    </p>
</body>
</html>