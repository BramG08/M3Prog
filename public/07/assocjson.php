<?php 

   header("Content-type: application/json;");
    

$trophiesPerGame = [
    "Demon's souls" => 11,
    "Mario wonder"=> 0,
    "Rayman Origins"=> 9,
    "Tetris"=> 10
];


$huisHouden= [
    "ps5"=> '19',
    'wasmachine'=> '30',
    'telefoon'=> '1',
    'nes'=> '2',
    'gameboy'=> '1'
    ];



$persoon = ['voornaam'=> 'Luigi', 'achternaam' => 'Mario', 'leeftijd' => 19,'woonplaats' => 'mushroomkingdom', 'favo eten' => 'pasta', 'minst favo eten' => 'paddestoelen'];


$weer = [
    "maandag" => 20,
    "dinsdag" => 11,
    "woensdag"=> 16,
    "donderdag"=> 12,
    "vrijdag"=> 14,
    "zaterdag"=> 16,
    "zondag"=> 18
];


$jsonArray = [
    $trophiesPerGame,
    $huisHouden,
    $persoon,
    $weer    
    ];

    $json = json_encode($jsonArray);
    echo $json;

?>