<?php 

$json = '{"naam":"God of war","prijs":39.99,"voorraad":150,"beschrijving":"Een episch avontuur in de wereld van de Noorse mythologie."}';
$artiekel = json_decode($json);
print_r($artiekel);

echo $artiekel->naam;
echo "<br>";
echo $artiekel->prijs = 29.99;
echo "<br>";
echo $artiekel->voorraad = 20;
echo "<br>";
echo $artiekel->beschrijving = "Game of the year 2018";
echo "<br>";


$json = json_encode($artiekel);
echo $json;
?>