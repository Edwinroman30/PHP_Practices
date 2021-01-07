<?php

try {
    $ruta = 'C:/Users/a19a64629/Downloads/Practica_archivo/'.$_FILES['archivo']['name'];


if(move_uploaded_file($_FILES['archivo']['tmp_name'],$ruta)){
    echo 'El cambio de posicion del archivo <b>'.$_FILES['archivo']['name'].'</b> fue exitoso.';
}
else{
    echo '<p style="color:red;">El cambio de posicion del archivo <b>'.$_FILES['archivo']['name'].'</b> no pudo llevarse acabo.</p>';;
}

} catch (\Throwable $th) {
    throw $th;
}
 


?>