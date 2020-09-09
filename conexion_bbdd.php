<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    table{

        width: 50%;
        border: 1px dotted #FF0000;
        margin: auto;
    }

    </style>

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

    $consulta="select * from artículos where PAIS='España'";

    $resultados=mysqli_query($conexion,$consulta);

    /* CON ARRAY INDEXADO */
    
    /*while(($fila=mysqli_fetch_row($resultados))){

    //$fila=mysqli_fetch_row($resultados);//ejecuta una linea del resulset o recordset

    echo "<table><tr><td>";

    echo $fila[0] . "</td><td>";

    echo $fila[1] . "</td><td>";

    echo $fila[2] . "</td><td>";

    echo $fila[3] . "</td><td>";

    echo $fila[4] . "</td></tr></table>";

    echo "<br>";

    echo "<br>";


    }

    mysqli_close($conexion);*/


/* CON ARRAY ASOCIATIVO */


    while(($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC))){

        echo "<table><tr><td>";
    
        echo $fila['SECCION'] . "</td><td>";
    
        echo $fila['NOMBRE ARTICULO'] . "</td><td>";
    
        echo $fila['PAIS'] . "</td><td>";

        echo $fila['FECHA'] . "</td><td>";

        echo $fila['PRECIO'] . "</td></tr></table>";
    
        echo "<br>";
    
        echo "<br>";
    
    
        }
    
        mysqli_close($conexion);

?>
</body>
</html>