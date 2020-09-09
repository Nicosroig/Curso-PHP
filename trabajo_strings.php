<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

    .resaltar{
        color: #F00;
        font-weight: bold;
    }
</style>
</head>
<body>
<?php
    echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";

    $nombre="Juan";
    echo "Mi nombre es $nombre <br>";

    /*strcmp = compara strings teniendo en cuenta minusculas y mayusculas
    strcasecmp = compara ignorando minusculas y mayusculas
    Ambas funciones devuelven 0 si los valores string coinciden o un 1 si no coinciden.
    1=true es verdadero que no coinciden
    0=false es falso que no coinciden, es decir, coinciden*/

    $variable1="Casa";
    $variable2="CASA";

    $resultado=strcmp($variable1, $variable2);
    echo "El resultado es $resultado <br>";

    $resultado2=strcasecmp($variable1, $variable2);
    echo "El resultado es $resultado2 <br>";


    /*el ! signo de exclamacion es el negativo de la variable
    en este caso se usa para evitar confusion de que es false que no coinciden, es decir, coincide,
    asi queda que si es true, coinciden, y si es false, no coinciden*/
    if(!$resultado){
        echo "Coinciden";
    } else{
        echo "No coinciden";
    }

    ?>
</body>
</html>