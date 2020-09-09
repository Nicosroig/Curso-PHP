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



    $consulta="select * from artículos where ARTICULO like'%$busqueda%'";

    $resultados=mysqli_query($conexion,$consulta);


    while(($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC))){

        //echo "<table><tr><td>";

        echo "<form action='Actualizar.php' method='get'>";

        echo "<input type='text' name='c_art' value='" . $fila['CODIGO'] . "' disabled><br>";

        echo "<input type='text' name='seccion' value='" . $fila['SECCION'] . "'><br>";

        echo "<input type='text' name='n_art' value='" . $fila['ARTICULO'] . "'><br>";

        echo "<input type='text' name='precio' value='" . $fila['PRECIO'] . "'><br>";

        echo "<input type='text' name='fecha' value='" . $fila['FECHA'] . "'><br>";

        echo "<input type='text' name='importado' value='" . $fila['IMPORTADO'] . "'><br>";

        echo "<input type='text' name='p_orig' value='" . $fila['PAIS'] . "'><br>";

        echo "<input type='submit' name='enviando' value='Actualizar'>";

        echo "</form>";
    
        }
    
        mysqli_close($conexion);

?>
</body>
</html>