<?php 
$huisHouden= [
"ps5"=> '19',
'wasmachine'=> '30',
'telefoon'=> '1',
'nes'=> '2',
'gameboy'=> '1'
];


foreach ($huisHouden as $key => $value) {
    echo "<p>$key verbruikt $value KwH.</p>";
}
$totaal  = 0;
foreach ($huisHouden as $key => $value) {
   $totaal += $value;
   
}
echo "<p>Totaal $totaal KwH.</p>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


</body>
</html>