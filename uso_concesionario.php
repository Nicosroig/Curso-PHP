<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("concesionario.php");
	
	//Compra_vehiculo::$ayuda=10000;//el static al no ser private, lo podria modificar. En vez de 4500 poner por ejemplo, 10000. Se llama con la clase Clase::$campo_estatico. POR ESO SE PUSO PRIVATE STATIC
	

	Compra_vehiculo::descuento_gobierno();

	
	$compra_Antonio=new Compra_vehiculo("compacto");
	
	$compra_Antonio->climatizador();
	
	$compra_Antonio->tapiceria_cuero("blanco");

	echo $compra_Antonio->precio_final() . "<br>";

	
	$compra_Ana=new Compra_vehiculo("compacto");
	
	$compra_Ana->climatizador();
	
	$compra_Ana->tapiceria_cuero("rojo");
	
	echo $compra_Ana->precio_final();
	
	
	
	


?>
</body>
</html>