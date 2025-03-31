<?php 

$trophiesPerGame = [
    "Demon's souls" => 11,
    "Mario wonder"=> 0,
    "Rayman Origins"=> 9,
    "Tetris"=> 10
];


$trophiesForDS = $trophiesPerGame["Demon's souls"];
print_r($trophiesForDS);
echo "<br>";
$trophiesForN64= $trophiesPerGame["Mario wonder"];
print_r($trophiesForN64);
echo "<br>";
$trophiesForPS1 = $trophiesPerGame["Rayman Origins"];
print_r($trophiesForPS1);
echo "<br>";
$tetris = $trophiesPerGame["Tetris"];
echo $tetris . "<br>";