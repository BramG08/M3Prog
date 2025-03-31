<?php 
$persoon = ['voornaam'=> 'Luigi', 'achternaam' => 'Mario', 'leeftijd' => 19,'woonplaats' => 'mushroomkingdom', 'favo eten' => 'pasta', 'minst favo eten' => 'paddestoelen'];

echo "<table>";

echo "<th>key</th><th>value</th>";
foreach($persoon as $key => $value)
{
    echo "<tr><td>$key<td><td>$value<td><tr>";
};

echo "</table>";


?>
