<?php

$var =$_POST['numero'];

$i=0;

while ($i <= $var) {
    
    echo $i,'<hr>';

    if($i === 5){
        echo 'Ha llegado a '.$i.' hasta luego','<hr>';
    }
    $i++;
}


?>