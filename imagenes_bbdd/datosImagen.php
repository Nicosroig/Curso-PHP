<?php

    // Recibe los datos de la imagen

    $imageName = $_FILES['userFile']['name'];
    $imageType = $_FILES['userFile']['type'];
    $imageSize = $_FILES['userFile']['size'];

    //echo $_FILES['imagen']['type'];

    if($imageSize <= 3000000){
        if($imageType == 'image/jpeg' || $imageType == 'image/jpg' || $imageType == 'image/png' || $imageType == 'image/gif'){
            // Ruta de la carpeta destino
            $path = $_SERVER['DOCUMENT_ROOT'] . '/intranet/uploads/';

            // Movemos la imagen del directorio temporal al directorio elegido
            move_uploaded_file($_FILES['userFile']['tmp_name'], $path.$imageName);
            
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

    $filePath = fopen($path . $imageName, "r");

    $content = fread($filePath, $imageSize);

    $content = addslashes($content);

    fclose($filePath);

    $sql="insert into upload (id, name, type, image) values (0, '$imageName', '$imageType', '$content')";

    $resultado=mysqli_query($conexion,$sql);

    if(mysqli_affected_rows ($conexion)>0){
        echo "Registro insertado con exito";
    }else{
        echo "No se pudo insertar el registro";
    }



?>