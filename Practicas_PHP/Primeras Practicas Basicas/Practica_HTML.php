<?php 

$AGPersona= ['Edwin','Roman',17];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            div{
                margin: auto;
                width: 90%;
                background: chartreuse;
            }
            h3{
                text-align: center;
            }
        </style>
</head>
<body>


    <div>
        <h3>
         <?php 
        $i=0;
        for($i=0;$i<=2;$i++){
            echo 'Values:','<br>',$AGPersona[$i],'<br>';
        }
        ?>
        </h3>
    </div>

    
</body>
</html>