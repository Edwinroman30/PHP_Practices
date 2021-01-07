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
        height: 300px;
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
    </style>
</head>
<body>
   <center><h1>Encriptador de contraseña</h1></center> 
    <div class="container">
        <form action="hash.php" method="post">
            <h2>Inserte lo que quiere encriptar:</h2>
            <input type="text" name="key" id="">
            <input type="submit" value="Encriptar">
        </form>

        <section>
           <h1 style=" text-align: center;">Escriba y envia para encriptar....</h1>
        </section>
    </div>
</body>
</html>