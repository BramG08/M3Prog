<?php
$winkel='{
  "winkel": {
    "producten": [
      {
        "productNaam": "Laptop",
        "details": {
          "prijs": 999.99,
          "voorraad": 50
        }
      },
      {
        "productNaam": "Smartphone",
        "details": {
          "prijs": 699.99,
          "voorraad": 100
        }
      }
    ]
  }
}
';

$winkelDecode = json_decode(json: $winkel,associative: true);
echo $winkelDecode["winkel"]["producten"][0]["productNaam"];
echo "<br>";
echo $winkelDecode["winkel"]["producten"][0]["details"]["prijs"];
echo "<br>";
echo $winkelDecode["winkel"]["producten"][1]["productNaam"];
echo "<br>";
echo $winkelDecode["winkel"]["producten"][1]["details"]["prijs"];
?>