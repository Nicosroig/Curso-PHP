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

    try{

        $base=new PDO ("mysql:host=localhost; dbname=prueba", "root", "");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("set character set utf8");

        $sql="delete from artículos where CODIGO=:cod";//consulta con un marcador

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":cod"=>$busqueda_cod));

            echo "Registro eliminado";

        $resultado->closeCursor();

    }catch(Exception $e){

        die("Error: " . $e->GetMessage());

    }finally{

        $base=null;

    }

?>
</body>
</html>