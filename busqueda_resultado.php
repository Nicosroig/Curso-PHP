<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php

function ejecuta_consulta($labusqueda){

require("datos_conexion.php");

/* CONEXION POR PROCEDIMIENTOS */
$conexion=mysqli_connect($db_host,$db_usuario,$db_pass);

if(mysqli_connect_errno()){//muestra el error en caso que no conecte a BBDD por error en nombre del host

    echo "Fallo al conectar con la BBDD";

    exit();

}

mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");

mysqli_set_charset($conexion, "utf8");//permite acentos



$consulta="select * from artículos where ARTICULO like'%$labusqueda%'";

$resultados=mysqli_query($conexion,$consulta);


while(($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC))){

    echo "<table><tr><td>";

    echo $fila['SECCION'] . "</td><td>";

    echo $fila['ARTICULO'] . "</td><td>";

    echo $fila['PAIS'] . "</td><td>";

    echo $fila['FECHA'] . "</td><td>";

    echo $fila['PRECIO'] . "</td></tr></table>";

    echo "<br>";

    echo "<br>";


    }

    mysqli_close($conexion);
}
?>
</head>
<body>
<?php

    @$mibusqueda=$_GET["buscar"];//la arroba impide el mensaje de error inicial

    $mipag=$_SERVER["PHP_SELF"];

    if($mibusqueda!=NULL){

        ejecuta_consulta($mibusqueda);

    }else{

        echo("<form action='" . $mipag . "'method='get'>
        
        <label>Buscar:<input type='text' name='buscar'></label>
        
        <input type='submit' name='enviando' value='Dale!'>
        
        </form>");

    }







?>
</body>
</html>