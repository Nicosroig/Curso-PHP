<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    include ("vehiculos.php");


    $mazda= new Coche();

    $pegaso= new Camion();


    echo "El Mazda tiene " . $mazda->get_ruedas() . " ruedas <br>";

    echo "El Pegaso tiene " . $pegaso->get_ruedas() . " ruedas <br>";

    echo "El Mazda tiene un motor de " . $mazda->get_motor() . " cc<br>";
    
    echo $pegaso->color . "<br>";

    $pegaso->frenar();

    $pegaso->set_color("Rojo", "Pegaso");

    $pegaso->arrancar();


    
    




?>
</body>
</html>