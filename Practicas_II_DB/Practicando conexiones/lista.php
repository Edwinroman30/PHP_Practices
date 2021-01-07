<?php

include_once('conexion.php');

$sentencia = $data_base -> query("SELECT * FROM personas;");
$personas = $sentencia -> fetchAll(PDO::FETCH_OBJ);

