<?php 

header("Content-Type: application/json");

$mario = ["name "=>"mario", "gemiddeldCijfer"=> 7.5, "klas"=>"mushroom"];

$wario = ["name"=> "wario","gemiddeldCijfer"=> 4.5, "klas"=>"W" ];

$bowser = ["name"=> "bowser","gemiddeldCijfer"=> 6.5, "klas"=> "shell" ];

$toad = ["name"=> "toad","gemiddeldCijfer"=> 5.4, "klas"=> "mushroom" ];


$dataObject = ["studenten"=>[$mario,$wario, $bowser, $toad]];

$jsonString = json_encode($dataObject);

echo $jsonString;

?>