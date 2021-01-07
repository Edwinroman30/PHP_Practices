<?php 

$AGformulario = [ 
    $_POST["nombre"],
    $_POST["apellido"],
    $_POST["edad"],
    $_POST["sexo"]
];


foreach($AGformulario as $v){
    echo '<h1>' .$v. '</h1>';
    echo '<hr>';
}


?>