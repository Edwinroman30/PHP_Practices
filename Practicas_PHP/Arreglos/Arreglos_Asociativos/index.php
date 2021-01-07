<?php 



$AGasociative = [
    'Juan' => 23,'Pablo' => 43,'Lucida' => 34
];

echo $AGasociative['Lucida'];

foreach ($AGasociative as $indice => $value) {
    echo '<br>',$indice.'  '.$value;
}


?>