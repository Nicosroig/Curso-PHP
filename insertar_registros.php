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

/* CONEXION POR PROCEDIMIENTOS */
$conexion=mysqli_connect($db_host,$db_usuario,$db_pass);

if(mysqli_connect_errno()){//muestra el error en caso que no conecte a BBDD por error en nombre del host

    echo "Fallo al conectar con la BBDD";

    exit();

}

mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");

mysqli_set_charset($conexion, "utf8");//permite acentos

$consulta="insert into artículos (CODIGO, SECCION, ARTICULO) values ('AR44', 'DEPORTE', 'Raqueta badminton')";

$resultados=mysqli_query($conexion,$consulta);

mysqli_close($conexion);


?>
</body>
</html>