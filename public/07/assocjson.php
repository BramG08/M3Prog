<?php 

   
    

$trophiesPerGame = [
    "Demon's souls" => 11,
    "Mario wonder"=> 0,
    "Rayman Origins"=> 9,
    "Tetris"=> 10
];
$json = json_encode($trophiesPerGame);
echo $json;


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

$weer = [
    "maandag" => 20,
    "dinsdag" => 11,
    "woensdag"=> 16,
    "donderdag"=> 12,
    "vrijdag"=> 14,
    "zaterdag"=> 16,
    "zondag"=> 18
];
$json = json_eb ncode($weer);
echo $json;


$jsonArray = [
    $trophiesPerGame,
    $huisHouden,
    $persoon,
    $weer    
    ];

print_r($jsonArray);

?>