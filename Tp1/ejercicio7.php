<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIO 7</title>
</head>
<body>
		<?php
			$arr=array();
			$aux=0;
			for ($i=0; $i < 30; $i++) { 
				$aux=$aux+1;
				$num=rand(1,30);
				array_push($arr, $num);
				if ($num==30) {
					break;
				}
			}
			echo "<pre>";
			echo "Arreglo: ";
			print_r($arr);
			echo "<br><br>";
			sort($arr);
			echo "Arreglo Ordenado: \n";
			print_r($arr);
			echo "<br><br>";
			echo "Arreglo partido al medio: \n";
			print_r(array_chunk($arr, $aux/2));
			echo "</pre>";
		?>
</body>
</html>