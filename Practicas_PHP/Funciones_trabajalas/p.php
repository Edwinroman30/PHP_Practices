<?php

$num1= $_POST['num1'];
$num2= $_POST['num2'];

$rdsuma= $_POST['suma'];
$rdmulti = $_POST['multi'];
$ckresta = $_POST['resta'];
$ckdiv = $_POST['div'];

function Multi($num1,$num2)
{
    return ($num1*$num2);
}

function Div($num1,$num2)
{
    return ($num1/$num2);
}

function Sum($num1,$num2)
{
    return ($num1+$num2);
}

function Res($num1,$num2)
{
    return ($num1-$num2);
}

function Regresa(){
    $fg = '<center>
    <h1>Funciones en PHP -
    '.Date('Y').'   
     </h1>
    </center>';

    echo $fg;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
<?php

 Regresa();
    
?>

<h2>Result</h2>
<hr>
<?php

if($rdsuma != NULL){
    echo '<b>Suman</b>,este es el valor de la funcion: '.Sum($num1,$num2);
}
else{
    echo 'ERROR';
}

echo '<hr>';
if($ckresta != NULL){
    echo '<b>Resta</b>,este es el valor de la funcion: '.Res($num1,$num2);
}
else{
    echo 'ERROR';
}

echo '<hr>';

if($rdmulti != NULL){
    echo '<b>Multiplicacion</b>,este es el valor de la funcion: '.Multi($num1,$num2);
}
else{
    echo 'ERROR';
}
echo '<hr>';
if($ckdiv != NULL){
    echo '<b>Division</b>,este es el valor de la funcion: '.Div($num1,$num2);
}
else{
    echo 'ERROR';
}

echo '<hr>';


?>

</body>
</html>