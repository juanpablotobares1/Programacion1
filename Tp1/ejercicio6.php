<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
</head>
<body>
	<?php
		$arr= array();
		for ($i=0; $i < 15; $i++) { 
		 	$num=rand(1,50);
		 	array_push($arr, $num);
		 } 
		echo "<pre>";
		echo "Arreglo Original:<br>";
		print_r($arr);
		$arr1=array_unique($arr);
		echo "Arreglo con valores repetidos eliminados:<br>";
		print_r($arr1);
		echo "</pre>";
	?>
</body>
</html>