<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require("datos_conexion.php");

    $conexion = mysqli_connect($db_host, $db_usuario, $db_pass);

    $usuario = mysqli_real_escape_string($conexion, $_GET["usuario"]);
    $pass = mysqli_real_escape_string($conexion, $_GET["pass"]); //evita inyeccion sql

    if (mysqli_connect_errno()) {

        echo "Fallo al conectar con la BBDD";

        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $consulta = "delete from usuarios where usuario ='$usuario' and password='$pass'";

    echo "$consulta <br><br>";


    mysqli_query($conexion, $consulta);

    if (mysqli_affected_rows($conexion) > 0) {
        echo "Baja procesada";
    } else {
        echo "No hay registros a eliminar";
    }


    mysqli_close($conexion);

    ?>
</body>

</html>