<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    
    try {
        $base=new PDO("mysql:host=localhost; dbname=prueba","root","");
        
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $base->exec("SET CHARACTER SET utf8");
        
        $registros_paginas=3;
        
        $pagina=1;

        $desde=($pagina - 1) * $registros_paginas;
        
        $sql_total="select * from artículos";
        
        $resultado=$base->prepare($sql_total);
        
        $resultado->execute(array());
        
        $num_filas=$resultado->rowCount();

        $total_paginas= round($num_filas / $registros_paginas);

        echo "Numero de registros de la consulta: " . $num_filas . "<br>";
        echo "Mostramos: " . $registros_paginas . " registros por pagina <br>";
        echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<br><br>";

        $resultado->closeCursor();

        $sql_limite="select * from artículos limit $desde,$registros_paginas";

        $resultado=$base->prepare($sql_limite);
        
        $resultado->execute(array());

        while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "<strong>Codigo del articulo: </strong>" . $registro['CODIGO'] . "<strong> Nombre: </strong>" . $registro['ARTICULO'] . 
                "<strong> Seccion: </strong>" . $registro['SECCION'] . "<strong> Precio: </strong>" . $registro['PRECIO'] . "<br><br>";
        }

    } catch(Exception $e) {
        echo "Linea de error: " . $e->getLine();
    }
    
    
    
    
    
    
    
    
    
?>
</body>
</html>