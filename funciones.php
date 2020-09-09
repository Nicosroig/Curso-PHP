<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    /*--- FUNCIONES PREDEFINIDAS ---*/

   /* $palabra="JUAN";

    echo(strtolower($palabra) . "<br>");*/


    /*--- FUNCIONES PROPIAS ---*/

    /*function suma ($num1, $num2){

        $resultado=$num1+$num2;

        return $resultado;

    }

    echo (suma(2,4));*/



   /* function frase_mayus($frase, $conversion=true){

        $frase=strtolower($frase);

        if ($conversion==true){

            $resultado=ucwords($frase);

        }else{

            $resultado=strtoupper($frase);

        }

        return $resultado;

    }

    echo(frase_mayus("esto es una prueba", false));*/



    /*--- FUNCIONES PARAMETRO POR VALOR ---*/

    /*function incrementa($valor1){

        $valor1++;

        return $valor1;

    }

    $numero=5;

    echo incrementa($numero) . "<br>";

    echo $numero;*/


    /*--- FUNCIONES PARAMETRO POR REFERENCIA ---*/

    /*function incrementa(&$valor1){

        $valor1++;

        return $valor1;

    }

    $numero=5;

    echo incrementa($numero) . "<br>";

    echo $numero;*/

    
    
    /*--- EJEMPLOS ---*/

    function cambia_mayus(&$param){

        $param=strtolower ($param);

        $param=ucwords ($param);

        return $param;

    }

    $cadena="hOlA mUnDo";

    echo cambia_mayus ($cadena) . "<br>";

    echo $cadena;

?>
</body>
</html>