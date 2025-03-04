<?php 
$aantalOpVoorraad = 2;



$opvoorraad = $aantalOpVoorraad > 0;

//if($opvoorraad == false)
if($aantalOpVoorraad > 0)
{
    echo "Niet op voorraad";
}
else
{
    echo "Artiekel is op voorraad";
}

?>