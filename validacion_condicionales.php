<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php

		/*--- Condicional ifelse ---*/

		/*if(isset($_POST["enviando"])){

		$edad=$_POST["edad_usuario"];

		if($edad<=18){

			echo "Eres menor de edad";

		}elseif($edad<=40){

			echo "Eres joven";

		}elseif($edad<=65){

			echo "Eres maduro";

		}else{

			echo "Cuidate";

		}*/

	
	/*--- Condicional ternario ---*/

	/*if(isset($_POST["enviando"])){

		$edad=$_POST["edad_usuario"];

			echo $edad<18 ? "Sos menor de edad, no podes acceder" : "Podes acceder";

	}*/

	
	/*--- Condicional ternario con operador de comparacion ---*/
	
	/*if(isset($_POST["enviando"])){

		$contra=$_POST["contra"];

		$nombre=$_POST["nombre_usuario"];

		echo $nombre=="Nicolas" && $contra=="1234" ? "Podes acceder" : "No podes acceder";

		Para ver este ejemplo, cambiar en ejemplo_condicionales el name y el id de edad_usuario a contra

	}*/
	
	/*--- Switch - case (con un solo case)---*/

	/*if(isset($_POST["enviando"])){

		$edad=$_POST["edad_usuario"];

		$nombre=$_POST["nombre_usuario"];

		switch($nombre){

			case "Juan":

				echo "Usuario autorizado. Hola Juan";

			break;

			case "Maria":

				echo "Usuario autorizado. Hola Maria";

			break;
		
			case "Pedro":

				echo "Usuario autorizado. Hola Pedro";

			break;

			default:

				echo "Usuario no autorizado";

		}

	}*/


	/*--- Switch - case (con dos cases)---*/

	if(isset($_POST["enviando"])){

		$edad=$_POST["edad_usuario"];

		$nombre=$_POST["nombre_usuario"];

		switch(true){

			case $nombre=="Juan" && $edad=="23":

				echo "Usuario autorizado. Hola Juan";

			break;

			case $nombre=="Maria" && $edad=="25":
			
				echo "Usuario autorizado. Hola Maria";

			break;
		
			case $nombre=="Pedro" && $edad=="27":
			
				echo "Usuario autorizado. Hola Pedro";

			break;

			default:

				echo "Usuario no autorizado";

		}

	}

?>