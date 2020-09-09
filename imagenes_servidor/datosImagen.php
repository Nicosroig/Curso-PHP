<?php

    // Recibe los datos de la imagen

    $imageName = $_FILES['imagen']['name'];
    $imageType = $_FILES['imagen']['type'];
    $imageSize = $_FILES['imagen']['size'];

    //echo $_FILES['imagen']['type'];

    if($imageSize <= 3000000){
        if($imageType == 'image/jpeg' || $imageType == 'image/jpg' || $imageType == 'image/png' || $imageType == 'image/gif'){
            // Ruta de la carpeta destino
            $path = $_SERVER['DOCUMENT_ROOT'] . '/intranet/uploads/';

            // Movemos la imagen del directorio temporal al directorio elegido
            move_uploaded_file($_FILES['imagen']['tmp_name'], $path.$imageName);
            
        }else{
            echo "Solo se pueden subir imagenes";
        }

    }else{
        echo "Archivo demasiado grande";
    }

    require("datos_conexion.php");

    $conexion=mysqli_connect($db_host,$db_usuario,$db_pass);

    if(mysqli_connect_errno()){

        echo "Fallo al conectar con la BBDD";

        exit();

    }

    mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    //$sql="insert into artículos (FOTO) values ('$imageName') where CODIGO = 'AR44'";
    $sql="update artículos set FOTO= '$imageName' where CODIGO = 'AR44'";

    $resultado=mysqli_query($conexion,$sql);





?>