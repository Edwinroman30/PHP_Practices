<?php

session_start();
$inter = $_GET['usuario'];
$_SESSION['user']= $inter;

if(!isset($_SESSION['user'])){
    echo 'Tiene que registrarse';
    die();
}
else{
echo 'El usuario es....'.$_SESSION['user'];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="cerrar_sesion.php">Cerrar</a>
</body>
</html>