<?php

$numero1 = 994;
$cadena = '0303';
$booleano22 = true;
$variable = 993.3133;
$vars = '020.3221';

echo is_numeric($cadena);
echo '<hr>';
echo is_int($numero1);
echo '<hr>';
echo is_float($vars);
echo is_float($variable);

echo '<hr> <h1>Convierte a BN: genera un string</h1>';
echo decbin($numero1); //Decimal a BN.


echo '<hr> <h1>Convierte a OCTAL: genera un string</h1>';
echo decoct(15); //octal a BN.
echo '<hr>';
echo octdec(17); //Su inversa


echo '<hr> <h1>Convierte a Hexadecimal: genera un string</h1>';
echo dechex(29); //octal a BN.
echo '<hr>';
//10,11,12,13,14,15,17,18,19,20
//16,17,18,19,20,21,22,23,24,25,
echo hexdec('ffffff');



echo '<hr> <h1>ROUND</h1>';
echo round(29.6);

echo '<hr> <h1>POW</h1>';
echo pow(9,2);
echo '<hr>';

echo '<hr> <h1>Raiz cuadrada </h1>';
echo sqrt(9);//raiz cuadrada
echo '<hr>';