<?php

$host = 'localhost';
$bdname = 'condominio';
$user = 'root';
$pass= 'administradorsa';

$tablabd1 = 'propietario';

$conexion = new mysqli($host,$user,$pass,$bdname);

error_reporting(1);

if($conexion->connect_errno){
    echo '<h1>Fallos en el proceso de conexion.....</h1>';
    exit();
}
?>