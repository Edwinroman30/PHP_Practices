<?php

session_start();
if(isset($_SESSION['usuario']))
{
    echo 'Ha iniciado, adios...';

}else{
    echo 'Por favor inicie la sesion';
    header('location:sesion1.php');
}

session_destroy();


?>