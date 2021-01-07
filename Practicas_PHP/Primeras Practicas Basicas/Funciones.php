<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Funciones</title>
</head>

<style type="text/css">
body{
    background:aqua;
}
h1{
    color:white;
}
</style>

<body>

<?php

echo "<hr>";

echo "<h1>Funciones</h1>";

echo "<br>";

function Mensaje1($Nombre, $Apellido, $Direccion, $Edad){
    echo 'Mi nombre completo es.. '.$Nombre.''.$Apellido;
    
    echo "<br>";
    
    echo 'Vivo en... '.$Direccion;
    
    echo "<br>";
    
    echo 'Y tengo '.$Edad.' Años';
}

echo "<h4>Información:</h4>";

echo "<br>";

Mensaje1('Edwin', ' Roman', ' EnUnaMansion', ' 17');

echo "<hr>";

echo "Tabla de multiplicacion";
echo "<br>";

function Multiplicacion($Num){    
    For($A = 0; $A <= 12; $A++)
	{
		$Total = $Num * $A;
		echo "$Num X $A = $Total <br>";
	}
    
}

$T = 5;

Multiplicacion($T);


?>
    
</body>
</html>