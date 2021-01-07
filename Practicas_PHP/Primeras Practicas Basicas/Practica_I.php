<?php

$texto = "Hola amigo/a ";
$entero = 445;
$decimal = 45.6;
$boleano = true;

echo $texto," = <strong> ", gettype($texto),"</strong>";
echo "<br>";
echo $entero, "= <strong>  ",gettype($entero),"</strong>";
echo "<br>";
echo $decimal," = <strong>  ", gettype($decimal),"</strong>";
echo "<br>";
echo $boleano, " = <strong>  ", gettype($boleano) ,"</strong>";

echo "<marquee>Otras cosas</marquee>";

?>