<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
</head>
<body>
	<?php
		echo "<pre>";
		for ($i=0; $i < 15; $i++) { 
		 	$arr[$i]=rand(1,50);
		 } 
		echo "Arreglo Original:<br>";
		print_r($arr);
		$arr1=array_unique($arr);
		echo "Arreglo con valores repetidos eliminados:<br>";
		print_r($arr1);
		echo "</pre>";
	?>
</body>
</html>