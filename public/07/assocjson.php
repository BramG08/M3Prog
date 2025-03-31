<?php 
$jsonArray[
    $trophiesPerGame,
    $persoon,
    $huisHouden
    
]
$huisHouden= [
    "ps5"=> '19',
    'wasmachine'=> '30',
    'telefoon'=> '1',
    'nes'=> '2',
    'gameboy'=> '1'
    ];
$json = json_encode($huisHouden);
echo $json;


$persoon = ['voornaam'=> 'Luigi', 'achternaam' => 'Mario', 'leeftijd' => 19,'woonplaats' => 'mushroomkingdom', 'favo eten' => 'pasta', 'minst favo eten' => 'paddestoelen'];
$json = json_encode($persoon);
echo $json;



?>