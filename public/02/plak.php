<?php 
$standaardString = 'hello world<br>';
$extraString = "extra world<br>";
echo $standaardString;
echo $extraString;


$voorNaam = "luigi";
$achterNaam = "mario";
$fullName = "hello" ." ".$voorNaam. " ".$achterNaam ."<br>";
echo $fullName; 

$naam = "Yoshi";
$ondertekentDoor = "directeur Bowser";
$enemy = "Koopas";

$emailTekst = "Beste $naam<br>
Helaas moeten wij uw verzoek afwijzen.<br>
Onze $enemy vinden het niet leuk om opgegeten te worden<br>
<br>
Hoogachtend<br>
$ondertekentDoor<br>
<br>
PS:<br>
De princess is in haar kasteel... voor nu :>";
echo $emailTekst;



?>