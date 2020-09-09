<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   $conexion= new mysqli("localhost","root", "","prueba");
   
   if($conexion->connect_errno){

        echo "Fallo la conexion " . $conexion->connect_errno;

   }

   $conexion->set_charset("utf8");

   $sql="select * from artículos";

   $resultados=$conexion->query($sql);

   if($conexion->errno){

        die($conexion->error);

   }

   while($fila=$resultados->fetch_assoc()){

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

   $conexion->close();

?>
</body>
</html>