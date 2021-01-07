<?php
$numero = $_POST['recibe'];

echo '<h1>LA TABLA DEL '.$numero.' MULTIPLICACION:</h1>';

$i =0;
for($i=0; $i<=12; $i++){
    echo '<h1>',$numero .'X'. $i .'='.($numero* $i),'</h1>';
    echo '<hr>';
}


?>