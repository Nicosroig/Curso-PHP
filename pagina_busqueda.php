<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $busqueda=$_GET["buscar"];

    require("datos_conexion.php");

    /* CONEXION POR PROCEDIMIENTOS */
    $conexion=mysqli_connect($db_host,$db_usuario,$db_pass);

    if(mysqli_connect_errno()){//muestra el error en caso que no conecte a BBDD por error en nombre del host

        echo "Fallo al conectar con la BBDD";

        exit();

    }

    mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");//permite acentos



    //$consulta="select * from artículos where ARTICULO like'%$busqueda%'";
    $consulta="select * from artículos where ARTICULO ='$busqueda'";

    echo "$consulta <br><br>";


    $resultados=mysqli_query($conexion,$consulta);


    while(($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC))){

        echo "<table><tr><td>";
    
        echo $fila['CODIGO'] . "</td><td>";
                
        echo $fila['SECCION'] . "</td><td>";
    
        echo $fila['ARTICULO'] . "</td><td>";
    
        echo $fila['PRECIO'] . "</td><td>";

        echo $fila['FECHA'] . "</td><td>";

        echo $fila['IMPORTADO'] . "</td><td>";

        echo $fila['PAIS'] . "</td></tr></table>";
    
        echo "<br>";
    
        echo "<br>";
    
    
        }
    
        mysqli_close($conexion);

?>
</body>
</html>