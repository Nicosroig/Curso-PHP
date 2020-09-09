<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

/*--- ARRAY INDEXADO ---*/


   /* $semana[]="Lunes";

    $semana[]="Martes";

    $semana[]="Miercoles";


    echo $semana[1];*/


    /*$semana=array("Lunes","Martes","Miercoles", "Jueves");

    echo $semana[3];*/


/*--- ARRAY ASOCIATIVO ---*/


    $datos=array("Nombre"=>"Juan","Apellido"=>"Gonzalez","Edad"=>21);

    //$datos="Martin";


    //echo $datos["Apellido"]

    /*if(is_array($datos)){

        echo "Es un array";

    }else{

        echo "No es un array";

    }*///condicional para saber si es un array

    $datos["Pais"]="España";//agrega datos a array asociativo


/*--- BUCLE FOREACH ---*///permite recorrer un array asociativo

    foreach($datos as $clave=>$valor){

        echo "A $clave le corresponde $valor <br>";

    }



   $semana[]="Lunes";

   $semana[]="Martes";

   $semana[]="Miercoles";

   $semana[]="Jueves";


   for($i=0;$i<count($semana);$i++){

        echo $semana [$i] . "<br>";

   }

   $semana[]="Viernes";//agrega elemento al array indexado

   sort($semana);//ordena por orden alfabetico


   for($i=0;$i<count($semana);$i++){

    echo $semana [$i] . "<br>";

    }





?>
</body>
</html>