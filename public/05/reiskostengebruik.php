<?php 
include("reiskosten.php");
$kosten = number_format(berekenRitKosten(663,15, 1.90), 2);
echo $kosten;
echo "<br>";
$kosten = number_format(berekenRitKosten(1438, 20, 1.46), 2);
echo $kosten;
echo "<br>";
$kosten = number_format(berekenRitKosten(1991, 18.47, 2.23), 2);
echo $kosten;
echo "<br>";
?>