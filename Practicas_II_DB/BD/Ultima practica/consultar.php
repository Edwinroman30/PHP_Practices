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

        <h1 class="lead display-4 text-center py-4">Propietario: Consulta</h1>

        <form action="consultar.php" method="post" class="align-items-center text-center">

        <div class="form-group text-left">
            <label for="documento">Documento:</label>
            <input type="text" name="doc" id="doc" class="form-control" placeholder="000X" required>
        </div>


        <a href="registro.php"><input type="buttom" value="Registrar" class="btn btn-success"></a>
        <input type="submit" value="Consultar" class="btn btn-info" name="btn2">
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
$doc = $_POST['doc'];

if (isset($_POST['btn2']))
 {
 	include('Openconexion.php');

 	$consulta = mysqli_query($conexion,"SELECT * FROM $tablabd1 WHERE  doc = $doc");
 	
 	/*$r = mysqli_fetch_array($consulta);
 	echo json_encode($r);
*/
 	while ($resultado = mysqli_fetch_array($consulta))
 	{
 		echo "
				
		<table class=\"table\">
			
			
			  <thead> 
			  <th scope=\"row\">Tabla de datos:</th>
			<tr>
				<td scope=\"col\"><b>Doc</b></td>
				<td scope=\"col\"><b>Nombre</b></td>
				<td scope=\"col\"><b>Direccion</b></td>
				<td scope=\"col\"><b>Telefono</b></td>
			</tr>
			  </thead> 

			  <tbody>
			<tr>
				<td>".$resultado['doc']."</td>
				<td>".$resultado['nombre']."</td>
				<td>".$resultado['direccion']."</td>
				<td>".$resultado['telefono']."</td>
			</tr>
			</tbody>
		</table>


 		";
  	}


 	include('Closeconexion.php');
}



 ?>