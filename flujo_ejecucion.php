<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flujo Ejecucion</title>
</head>
<body>

<?php

    echo "Este es el primer mensaje <br>";

    function dameDatos(){

        echo "Este es el mensaje del interior de la funcion <br>";

    }

    echo "Este es el segundo mensaje <br>";

    dameDatos();

    /*include ("pagina_con_codigos.php") 
    La funcion include linkea a una pagina que tenga codigos*/

    /*require es igual que el include pero si hay un fallo
    no continua el flujo de datos. El archivo es requerido
    para que funcione el codigo */

?>




</body>
</html>