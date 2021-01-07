<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Registro</title>
  </head>
  <body>
   
<div class="container-fluid p-5" style="background:#474747;color:white">

    <div class="container" style="width:600px">
        <center>

        <h1 class="lead display-4 text-center py-4">Propietario: Registro</h1>

        <form action="registro.php" method="post" class="align-items-center text-center">

        <div class="form-group text-left">
            <label for="documento">Documento:</label>
            <input type="text" name="doc" id="doc" class="form-control" placeholder="000X" required>
        </div>

        <div class="form-group  text-left">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Fulano">
        </div>
        
        <div class="form-group  text-left">
            <label for="dir">Direccion:</label>
            <input type="text" name="dir" id="dir" class="form-control">
        </div>
        <div class="form-group  text-left">
            <label for="tel">Telefono:</label>
            <input type="text" name="tel" id="tel" class="form-control">
        </div>

        <input type="submit" value="Enviar" class="btn btn-success" name="btn1">
        <a href="consultar.php"><input type="buttom" value="Consultar" class="btn btn-info"></a>
        </form>


        </center>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<?php

error_reporting(0);
if(isset($_POST['btn1']))
{

$doc = $_POST['doc'];
$nombre = $_POST['nombre'];
$direccion = $_POST['dir'];
$telefono = $_POST['tel'];

  include('Openconexion.php');
  $conexion->query("INSERT INTO $tablabd1 (doc, nombre, direccion, telefono) VALUES ('$doc','$nombre','$direccion','$telefono');");

  echo "<script>alert('Operacion exitosa...')</script>";
  
}
else{
  echo "<script>alert('<b>ERROR<b> en la operacion...)</script>";
}



include_once('Closeconexion.php');
?>