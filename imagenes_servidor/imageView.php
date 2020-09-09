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

    $conexion=mysqli_connect($db_host,$db_usuario,$db_pass);

    if(mysqli_connect_errno()){

        echo "Fallo al conectar con la BBDD";

        exit();

    }

    mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $sql= "select FOTO from artículos where CODIGO='AR44'";

    $resultado = mysqli_query($conexion,$sql);

    while ($fila=mysqli_fetch_array($resultado)){
        $ruta_img=$fila["FOTO"];
    }

?>
<div>
    <img src="/intranet/uploads/<?php echo $ruta_img;?>" alt="Imagen del primer articulo" width="25%">
</div>    
</body>
</html>