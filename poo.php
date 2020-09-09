<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    class Coche{

        var $ruedas;

        var $color;

        var $motor;

        function __construct(){//Estado inicial de la clase. Mismo nombre de la clase. Nueva forma de llamar al constructor: __construct
            $this->ruedas=4;

            $this->color="";

            $this->motor=1600;

        }

        function arrancar(){
        
            echo "Estoy arrancando <br>";

        }

        function girar(){

            echo "Estoy girando <br>";

        }

        function frenar(){

            echo "Estoy frenando <br>";

        }

        function establece_color($color_coche, $nombre_coche){

            $this->color=$color_coche;

            echo "El color de " . $nombre_coche . " es: " . $this->color . "<br>";

        }

    }

    $renault=new Coche();//estado inicial de la instancia

    $mazda=new Coche();

    $seat=new Coche();

    $renault->establece_color("rojo", "Renault");

    $seat->establece_color("azul", "Seat");

    $mazda->girar();

    echo $mazda->ruedas;






?>
</body>
</html>