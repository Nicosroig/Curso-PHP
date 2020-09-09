<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $busqueda_cod=$_POST["cod"];
    $busqueda_sec=$_POST["secc"];
    $busqueda_art=$_POST["art"];
    $busqueda_prec=$_POST["prec"];
    $busqueda_fec=$_POST["fec"];
    $busqueda_impo=$_POST["impo"];
    $busqueda_porig=$_POST["porig"];

    try{

        $base=new PDO ("mysql:host=localhost; dbname=prueba", "root", "");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("set character set utf8");

        $sql="insert into artículos (CODIGO, SECCION, ARTICULO, PRECIO, FECHA, IMPORTADO, PAIS)
              values (:cod, :secc, :art, :prec, :fec, :impo, :porig)";//consulta con un marcador

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":cod"=>$busqueda_cod,":secc"=>$busqueda_sec,":art"=>$busqueda_art,":prec"=>$busqueda_prec,":fec"=>$busqueda_fec,":impo"=>$busqueda_impo,":porig"=>$busqueda_porig));

            echo "Registro insertado";

        $resultado->closeCursor();

    }catch(Exception $e){

        die("Error: " . $e->GetMessage());

    }finally{

        $base=null;

    }

?>
</body>
</html>