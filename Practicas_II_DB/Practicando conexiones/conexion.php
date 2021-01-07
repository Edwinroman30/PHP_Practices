<?php 

$contraseña= 'administradorsa';
$user= 'root';
$db_name = 'crudphp';

try {
    
    $data_base = new PDO('mysql:host=localhost;dbname='.$db_name,$user,$contraseña);
    echo '<script>alert("conexion correcta.....");</script>';
    
} catch (Exception $e) {
    echo $e;
}


 ?>