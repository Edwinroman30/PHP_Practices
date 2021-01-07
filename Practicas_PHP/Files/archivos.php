<?php

$PArchivos= [
    $_FILES['archivo']['name'],$_FILES['archivo']['size'],$_FILES['archivo']['tmp_name'],
    $_FILES['archivo']['type'],$_FILES['archivo']['error']
];

echo '<h1>';
echo 'Este es la propiedad para el nombre:',$PArchivos[0];
echo '<hr>';
echo 'Este es la propiedad para el size en bits:',$PArchivos[1];
echo '<hr>';
echo 'Este es la propiedad para el ruta:',$PArchivos[2];
echo '<hr>';
echo 'Este es la propiedad para el tipo:',$PArchivos[3];
echo '<hr>';
echo 'Este es la propiedad para el error:',$PArchivos[4];
echo '</h1>';