<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    



    /*--- WHILE (bucle indeterminado)---*/

    /*$var1=1;

    while($var1<6){

        echo "Estamos ejecutando el codigo del bucle <br>";

        $var1++;

    }

    echo "Salimos del bucle";*/


    /*--- DO WHILE (bucle indeterminado---*/

    /*$var1=7;

    do{
        echo "Estamos ejecutando el codigo del bucle <br>";

        $var1++;

    }while($var1<6);

    echo "Salimos del bucle";*/


    /*--- FOR (bucle determinado)---*/

    for($i=0;$i<=10;$i++){

        echo "<p>Hemos entrado en el bucle</p>";

    }

        echo "<p>Hemos salido del bucle</p>";



    for($i=0;$i<=10;$i++){

         echo "<p>$i</p>";
    
    }
    
        echo "<p>Hemos salido del bucle</p>";



    for($i=0;$i<=10;$i+=2){

        echo "<p>$i</p>";
       
    }
       
        echo "<p>Hemos salido del bucle</p>";



    for($i=0;$i<=10;$i++){

        echo "<p>$i</p>";

        if($i==6){

            echo "<p>Bucle interrumpido</p>";

        break;

        }
       
    }
       
        echo "<p>Hemos salido del bucle</p>";



    for($i=0;$i<=10;$i++){

        echo "9 x $i = " . 9*$i . "<br>";
    
    }
           
        echo "Hemos salido del bucle <br>";
    
    
    for($i=10;$i>=-10;$i--){

        if($i==0){//no realiza esta vuelta de bucle porque daria error, no se puede dividr por 0, el continue permite seguir despues del if

            echo "Division por 0 no es posible <br>";
        
            continue;
        }

        echo "9 / $i = " . 9/$i . "<br>";

    }

        echo "Hemos salido del bucle <br>";

    
    /*--- FOR ANIDADO ---*/
    
    for ($num1=1;$num1<=10;$num1++){

        for($num2=1;$num2<=10;$num2++){
            
            echo "$num1 x $num2 = " . ($num1*$num2) . "<br>";
        }

    }

?>
</body>
</html>