<?php


$AGMultidimen = [

    ['Edwin','Alberto',17],
    ['Carlos','Agusto',17],
    ['Maria','Angela',15]

];

echo '<center>','<h1>Recorriendo Arreglos dimensionales</h1>','</center>';



for ($i=0; $i < count($AGMultidimen); $i++) { 
   
    for ($x=0; $x < count($AGMultidimen); $x++) { 
        echo $AGMultidimen[$i][$x],'<br>';
    }
    echo '<hr>';
}

Array_Push($AGMultidimen,'Anyara','Nayelis',22);
echo '<hr>';

?>