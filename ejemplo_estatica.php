<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    function incrementaVariable(){

    static $contador=0; //static permite que el valor de la variable no se resetee cada vez que termina la funcion
    $contador++;
    echo $contador . "<br>";
    
    }

    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
      
    
    
?>
</body>
</html>