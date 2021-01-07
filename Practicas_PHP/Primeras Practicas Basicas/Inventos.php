<?php 

$va = 5;
$ba = 2;

$value1 = (8%2);
$value2 = pow(7,7); /*===*/ $another = $va**$ba;

echo $value1 ." = Esto es el modulo con %."."<br>";
echo $value2 ." = Esto es cuando es una potencia. <br>";

echo "Resourt:". $va**$ba;

echo "<br>";
if ($value2%2 == 0) {
	echo $value2," Es un numero par";
}
else{
	echo $value2," No es par osea es impar";
}

echo "<br>";


$cambio = '64';
$chance;


echo "El valor ". $cambio. " es ". gettype($cambio);
echo "<br>";


 ?>