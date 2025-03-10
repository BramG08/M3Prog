<?php

function mijnPrint($printText)
{
    print($printText);
    print("<br>");
}
//het gaat fout doordat er te weinig argumenten worden meegegeven
mijnPrint("regel 1");
mijnPrint("regel 2");
mijnPrint("regel 3");
mijnPrint("het gaat fout doordat er te weinig argumenten worden meegegeven");

$dezeGaatMee = "Deze waarde word meegenomen";
mijnPrint($dezeGaatMee);
?>