<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$cod = $_GET['c_art'];
$sec = $_GET['seccion'];
$nom = $_GET['n_art'];
$pre = $_GET['precio'];
$fec = $_GET['fecha'];
$imp = $_GET['importado'];
$por = $_GET['p_orig'];

require("datos_conexion.php");

/* CONEXION POR PROCEDIMIENTOS */
$conexion=mysqli_connect($db_host,$db_usuario,$db_pass);

if(mysqli_connect_errno()){//muestra el error en caso que no conecte a BBDD por error en nombre del host

    echo "Fallo al conectar con la BBDD";

    exit();

}

mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");

mysqli_set_charset($conexion, "utf8");//permite acentos

$consulta="delete from artículos where CODIGO = '$cod'";

$resultados=mysqli_query($conexion,$consulta);

if($resultados == FALSE){

    echo "Error en la consulta";

}else{

    //echo "Registro eliminado<br><br>";

    //echo mysqli_affected_rows($conexion);
    if(mysqli_affected_rows($conexion)==0){
        echo "No hay registros que eliminar";
    }else{
        echo "Se ha eliminado " . mysqli_affected_rows($conexion) . " registro";
    }

}

mysqli_close($conexion);


?> 
</body>
</html>