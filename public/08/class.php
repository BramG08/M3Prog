<?php 

$artiekel = [
    "naam"=> "hello world badge",
    "prijs" => 5.99,
    "vooraad"=> 200
];

$json = json_encode($artiekel);
echo "$json<br>";

$object = json_decode($json);
//Als een stdClass
print_r($object);  
?>