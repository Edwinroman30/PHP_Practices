<?php
session_start();
$dataexterna = $_POST['checking'];
$save = $_SESSION['intermedio'];

if(!isset($_SESSION['intermedio'])){
    header('Location: index.php');//siempre debe de ir al principio de lla instruccion
    die();
    exit;
}
else{

if(password_verify($dataexterna,$save)){
    echo '<h1 style="color:green;">Es la misma contraseña......</h1>';
}
else{
    echo '<h1 style="color:red;">no es la misma contraseña......</h1>';
}
}
session_destroy();
?>