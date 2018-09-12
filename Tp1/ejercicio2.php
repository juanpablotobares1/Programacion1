<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
</head>
<body>
	<?php
		$arr1 = array(0=>0,1=>1,2=>2,3=>"Prueba 3",4=>"Prueba 4");
		$param = array('Apellido' => "Tobares", 'Nombre' => "Juan Pablo", 'Edad' => 22);
		$param1 = array(
			'Apellido y Nombre' => array("Tobares","Juan Pablo"),
			'Edad y Fecha de Nacimiento' => array(22,"3/4/96"),
		);
		$param2 = array(
			0 => array(10,20,30),
			1 => array(40,50,60),
		);
		echo "<pre>";
		echo "Arreglo vectorial simple: <br>";
		print_r($arr1);
		echo "Arreglo asociativo: <br>";
		print_r($param);
		echo "Arreglo vectorial de 3 dimensiones: <br>";
		print_r($param2);
		echo "Arreglo asociativo de 2 dimensiones: <br>";
		print_r($param1);
		echo "</pre>";
	?>
</body>
</html>