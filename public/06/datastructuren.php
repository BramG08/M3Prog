<?php 

class film 
{
    public $title;
    public $details;
}

class details{
    public $regisseur;
    public $jaar;
    public $genre;
}
$film = new film();
$film->title = "Inception";
$film->details = new details();
$film->details->regisseur = "Christopher Nolan";
$film->details->jaar = 2010;
$film->details->genre = "Sci-fi";
//echo $film->title;
//echo "<br>";
//echo $film->details->regisseur;
//echo "<br>";
//echo $film->details->jaar;
//echo "<br>";
//echo $film->details->genre;



$films = [
[
    "title"=> "Cars",
    "details"=> [
        "genre"=> "COmdey",
    ],
],

[
    "title"=> "Transformes",
    "details"=> [
        "genre"=> "Sci-fi",
    ],
]
  ];

  $filmJson = json_encode($films);
  echo $filmJson;
?>