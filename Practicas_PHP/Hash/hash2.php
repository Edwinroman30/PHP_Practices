<?php
$user = $_POST['user'];
$contra= $_POST['contra'];

//Proceso de encriptacion:
//Declaracion del asesor:
$asesor;
  $asesor = password_hash($contra,PASSWORD_DEFAULT);

    $comprobar = $_POST['kk'];
    
       if(password_verify($comprobar,$asesor)){
           echo 'EXITOSO';
       }
       else {
           echo 'FALLO INTENTE RECARGANDO LA PAG';
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
    <form action="hash2.php" method="post">
    <input type="text" names="kk">
    <input type="submit" value="Send">
    </form>
</body>
</html>