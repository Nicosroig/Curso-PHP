<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    $nombre="Juan";


    function dameNombre (){
        global $nombre; //esto permite que una funcion que este fuera de la funcion,
                        //sea utilizada. Si no, se toma como dos funciones distintas.

        $nombre="El nombre es " . $nombre;
    };

    dameNombre ();
    echo $nombre;

?>


</body>
</html>