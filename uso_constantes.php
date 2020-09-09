<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    define("AUTOR", "Nicolas"); //("AUTOR", "Nicolas", true) el true hace que se pueda poner la constante en minusculas

    echo "El autor es: " . AUTOR . "<br>"; //las constantes no se pueden poner 
                                  //en el string, se tienen que concatenar
    echo "La linea de esta instruccion es: " .  __LINE__ . "<br>";

    echo "Estamos trabajando en este fichero: " .  __FILE__ . "<br>";




?>
</body>
</html>