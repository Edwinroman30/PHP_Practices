<?php



function name($nombre,$edad){

    echo 'Su'.$nombre.'es y su edad es de'.$edad.'el proximo año usted tendra'.$edad+1;
}

name($_POST['nombre'],$_POST['edad']);