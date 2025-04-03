<?php

class LunchItem
{
    public $naam;
    public $prijs;
    public $beschijving;
}

$broodjeBal = [
    "naam" => "Broodje bal",
    "prijs" => 4.50,
    "beschijving" => "lekker broodje met een gehaktbal erin"
];

$broodjeKroket = [
    "naam" => "Broodje kroket",
    "prijs" => 0.50,
    "beschijving" => "lekker broodje met een kroket erin"
];



$lunchmenu = [
    $broodjeBal,
    $broodjeKroket
];


foreach ($lunchmenu as $item) {
    echo $item["naam"];
    echo "<br>";
    echo $item["prijs"];
    echo "<br>";
    echo $item["beschijving"];
    echo "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>  lunchmenu</h1>

    <p><?
       foreach ($lunchmenu as $item) {
        echo $item["naam"];
        echo "<br>";
        echo $item["prijs"];
        echo "<br>";
        echo $item["beschijving"];
        echo "<br>";
    }
        ?>
    </p>

  
</body>

</html>