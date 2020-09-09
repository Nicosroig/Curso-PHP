<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $pais = $_GET["buscar"];

    require("datos_conexion.php");

    $conexion = mysqli_connect($db_host, $db_usuario, $db_pass);

    if (mysqli_connect_errno()) {

        echo "Fallo al conectar con la BBDD";

        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $sql = "select CODIGO, SECCION, PRECIO, PAIS from artículos where PAIS = ?"; //prepara la consulta sql

    $resultado = mysqli_prepare($conexion, $sql); //se pasa como parametro la conexion y la variable de la consulta

    $ok = mysqli_stmt_bind_param($resultado, "s", $pais); //se pasa como parametro la variable del _prepare, un "s" para string, "i" para numero o "d" para decimal(dependiendo el tipo de campo que devuelve la busqueda) y como 3er parametro, la variable en donde se almacena el resultado de la busqueda que trae el $_GET)

    $ok = mysqli_stmt_execute($resultado); //reescribe el $ok ejecutandolo

    if ($ok == false) {
        echo "Error al ejecutar la consulta";
    } else {
        $ok = mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais); //1er parametro  es la variable del _prepare. Despues se crean(inventan) tantas variables como campos devuelve la consulta sql

        echo "Articulos encontrados: <br><br>";

        while (mysqli_stmt_fetch($resultado)) { //el while es para recorrer la base de datos y devuelva la consulta. El fetch hace la lectura de los valores de la consulta sql
            echo $codigo . " " . $seccion . " " . $precio . " " . $pais . "<br>";
        }

        mysqli_stmt_close($resultado); //se cierra el stmt
    }



    ?>
</body>

</html>