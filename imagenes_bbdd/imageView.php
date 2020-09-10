<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $id='';
    $name='';
    $type='';
    $image='';

    require("datos_conexion.php");

    $conexion=mysqli_connect($db_host,$db_usuario,$db_pass);

    if(mysqli_connect_errno()){

        echo "Fallo al conectar con la BBDD";

        exit();

    }

    mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $sql= "select * from upload where id=10";

    $resultado = mysqli_query($conexion,$sql);

    while ($file=mysqli_fetch_array($resultado)){
        $id=$file["id"];
        $name=$file["name"];
        $type=$file["type"];
        $image=$file["image"];
    }
    echo "Id: " . $id . "<br>";
    echo "Name: " . $name . "<br>";
    echo "Type: " . $type . "<br>";
    echo "<img src='data:$type; base64," . base64_encode($image) . "'>";

?>
<div>
   
</div>    
</body>
</html>