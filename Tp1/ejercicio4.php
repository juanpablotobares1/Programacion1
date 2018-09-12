<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
</head>
<body>
	<?php
		echo "<pre>";
		$st = "1,2,3,4,5";
		$arr2 = array('0' => 1, '1'=>2,'2'=>3,'3'=>4,'4'=>5 );
		echo "String 1: $st <br><br> Arreglo 1:";
		$arr1 = str_split($st);
		print_r($arr1);
		echo "<br><br>Arreglo 2:";
		print_r($arr2);
		$st1 = implode(",", $arr2);
		echo "String 2: $st1";
		echo "</pre>";
	?>
</body>
</html>