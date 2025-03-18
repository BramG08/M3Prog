<?php 
function berekenRitKosten( $asfstand_km , $km_per_liter, $liter_prijs){

   $kosten_euro = 0;

   $aantal_liters = $asfstand_km / $km_per_liter;
   $kosten_euro = $aantal_liters * $liter_prijs;
   return $kosten_euro;
}
//$kosten = berekenRitKosten(500, 20, 2.45);
//$kosten = berekenRitKosten(1200, 10, 1.89);

?>