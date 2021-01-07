<?php   

//declaracion de arreglos


//Arreglos normal;
echo '<h1>Arreglos Basicos</h1>';
echo '<br>';
$AGNormal = ['HP','512GB','2ghz'];

    echo $AGNormal[0];
    echo '<br>';
    echo $AGNormal[1];
    echo '<br>';
    echo $AGNormal[2];


$AGPersona= [
    'Nombre' => 'Juan',
    'Edad' => '34',
    'ID' => '001-2331223-5'
];


echo '<h1>Otro arreglo con la funcion []</h1>';
echo $AGPersona['Nombre'];
echo '<br>';
echo $AGPersona['Edad'];
echo '<br>';
echo $AGPersona['ID'];



echo '<br>';
echo '<br>';


//otro arreglo
echo '<h1>Otro arreglo con la funcion Array()</h1>';


$AGEstudiante = array(
    'Nombre' => 'Edwin',
    'Area' => 'Informatica'
);


echo $AGEstudiante['Nombre'];
echo '<br>';
echo $AGEstudiante['Area'];

//Agrega elementos dentro de un array
Array_Push($AGEstudiante,"Juan","Electronica");

//La Funcion Print_r();
echo '<br>','<hr>';
echo '<h1>USO DE Print_r()</h1>';
Print_r($AGEstudiante);
echo '<br>';

Array_Push($AGNormal,"4GB");
print_r($AGNormal);



?>