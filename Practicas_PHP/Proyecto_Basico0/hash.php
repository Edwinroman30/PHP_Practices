<?php
session_start();
$inter = $_POST['key'];
$mostrar =password_hash($inter,PASSWORD_DEFAULT);
$_SESSION['intermedio'] = $mostrar;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto Final</title>
    <style>
    *{
        margin: 0px;
        padding: 0px;
    }

    .container{
        background: teal;
        display: flex;
        flex-direction: row;
        justify-content: center;
        padding: 30px;
        flex-wrap: wrap;
        
    }
    form{
        width: 90%;
        height: 150px;
        background: crimson;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
       
    }
    input{
        width: 85%;
        height: 35px;
        border-bottom-width: 100%;
        align-items: center;
        
    }
    section{
        width:90%;
        height:200px;
        background: darkgray;
    }  
   button{
       width: 100%;
        height: 50px;
        align-items: center; 
        color: white;
        background:#4324;
    } 
    </style>
</head>
<body>
   <center><h1>Encriptador de contraseña</h1></center> 
    <div class="container">
        <form action="comprobacion.php" method="post">
            <h2>Este es su resultado:</h2>
            <input type="text" name="checking" id="">
            <input type="submit" value="Comprobar">
        </form>

        <section>
            <?php echo '<h2 style=" text-align: center;">'.$mostrar.'</h2>'; ?>
        </section>
    </div>
</body>
</html>