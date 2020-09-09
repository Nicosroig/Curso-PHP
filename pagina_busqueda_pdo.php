<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $busqueda_sec=$_POST["seccion"];
    $busqueda_porig=$_POST["p_origen"];

    try{

        $base=new PDO ("mysql:host=localhost; dbname=prueba", "root", "");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("set character set utf8");

        $sql="select ARTICULO, SECCION, PRECIO, PAIS from artículos where SECCION = :secc and PAIS = :p_orig";//consulta con un marcador

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":secc"=>$busqueda_sec,":p_orig"=>$busqueda_porig));

        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

            echo "Nombre del articulo: " . $registro['ARTICULO'] . " | " . "Seccion: " . $registro['SECCION'] . " | " . "Precio: $" . $registro['PRECIO'] . " | " . "Pais: " . $registro['PAIS'] . "<br>";

        }

        $resultado->closeCursor();

    }catch(Exception $e){

        die("Error: " . $e->GetMessage());

    }finally{

        $base=null;

    }

?>
</body>
</html>