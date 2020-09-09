<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $usuario=$_GET["usuario"];
    $pass=$_GET["pass"];


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
    $consulta="select * from usuarios where usuario ='$usuario' and password='$pass'";

    echo "$consulta <br><br>";


    $resultados=mysqli_query($conexion,$consulta);


    while(($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC))){

        echo "Bienvenido " . "$usuario" . ", estos son tus datos:";

        echo "<table><tr><td>";
    
        echo $fila['usuario'] . "</td><td>";
                
        echo $fila['password'] . "</td><td>";
    
        echo $fila['telefono'] . "</td><td>";
    
        echo $fila['direccion'] . "</td></tr></table>";
    
        echo "<br>";
    
        echo "<br>";
    
    
        }
    
        mysqli_close($conexion);

?>
</body>
</html>