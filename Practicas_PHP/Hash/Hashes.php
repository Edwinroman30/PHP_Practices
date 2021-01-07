<?php

//Utilizando el metodo Hash.
echo "Este es MD5";
echo md5('edwinroman');
echo "<hr>";
//Devuelve 32 caracteres hexagecimal.

//sha1();

//hash(algoritmo, string);
// EN ALGORITMO = 'md5','sha256','haval160',<etc class=""></etc>

//password_hash("contrasena",PASSWORD_DEFAULT);
//password_verify(contrasena a verificar,conla que tenemos procesada);

$test = 'Edwin se siente incomodo hoy';

echo md5($test);
echo '<hr>';
echo sha1($test);
echo '<hr>';
echo hash("sha256",$test);
echo '<hr>';

$con = password_hash($test, PASSWORD_DEFAULT);
echo $con;
echo '<hr>';

   if (password_verify('Hola hpm',$con)){
       echo 'Valida';
   }
   else{
       echo 'intente de nuevo';
   }







?>