<?php


class student 
{
    public $name;
    public $gemiddeldeCijfer;
}

class dataObject 
{
    public $studenten;
}

$mario = new student();
$mario->name = "mario";
$mario->gemiddeldeCijfer = 8;

$bowser = new student();
$bowser->name = "bowser";
$bowser->gemiddeldeCijfer = 6.5;

$toad = new student();
$toad->name = "toad";
$toad->gemiddeldeCijfer = 10;

$wario = new student();
$wario->name = "wario";
$wario->gemiddeldeCijfer = 2.2;


$dataObject = new dataObject();
$dataObject->studenten = [$mario, $bowser, $toad, $wario];

echo $dataObject->studenten[0]->name;  
echo $dataObject->studenten[0]->gemiddeldeCijfer;
echo "<br>";
echo $dataObject->studenten[1]->name;
echo $dataObject->studenten[1]->gemiddeldeCijfer;
echo "<br>";
echo $dataObject->studenten[2]->name;
echo $dataObject->studenten[2]->gemiddeldeCijfer;
echo "<br>";
echo $dataObject->studenten[3]->name;
echo $dataObject->studenten[3]->gemiddeldeCijfer;
?>