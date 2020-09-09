<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    /*$num1=rand(10,50); //numero aleatorio o aleatorio entre numeros

    echo "El numero es: " . $num1;*/

    /*$num1=pow(5,3); //potencia del primer numero por el segundo

    echo "El numero es: " . $num1;*/

    /*$num1=5.759498374;

    echo "El numero es: " . round($num1,2); //redondea el numero, se puede especificar la precision, en este caso 2 decimales*/

    /*----- CASTING ----- */

    $num1="5";

    $num1+=2;

    $num1+5.75;

    echo "El numero es: " . $num1;

    /* El casting lo que hace es reasignar el tipo de variable
    En este caso es un casting implicito, pasa de string a entero
    y de entero a float (decimal), sin tener que hacer nada,
    lo genera automaticamente */

    $num1="5";

    $resultado=(int)$num1;

    /* En este caso se especifica a que tipo de variable se quiere
    cambiar, es el casting explicito */



?>
</body>
</html>