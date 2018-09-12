<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5</title>
</head>
<body>
	<?php
		$el=rand(5,15);
		echo "Cantidad de elementos: $el<br><br>";
		$aux=0;
		$sum=0;
		$arr=array();
		for ($i=0; $i < $el; $i++) { 
			$aux=$aux+1;
			echo "Elemento $aux: ";
			$num=rand(1,100);
			echo"$num";
			array_push($arr, $num);
			$sum=$sum+$num;
			echo "<br>";
		}
		echo "<br> El numero minimo es: ";
		echo min($arr);
		echo "<br> El numero maximo es: ";
		echo max($arr);
		$prom=$sum/$el;
		echo "<br><br>El promedio es: $prom";
	?>
</body>
</html>