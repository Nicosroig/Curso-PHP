<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    $var1=true;

    $var2=false;

    $resultado=$var1 && $var2; //almacena el resultado false

    if($resultado==true){

        echo "Correcto";

    }else{

        echo"Incorrecto";

    } //imprime Incorrecto porque && tiene prioridad sobre el =



    $var1=true;

    $var2=false;

    $resultado=$var1 and $var2; //almacena el resultado false

    if($resultado==true){

        echo "Correcto";

    }else{

        echo"Incorrecto";

    } //imprime Correcto porque el = tiene prioridad sobre el "and"





?>
</body>
</html>