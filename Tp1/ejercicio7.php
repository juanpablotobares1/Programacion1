<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 7</title>
</head>
<body>
	<?php
		while ($arr[$i] <= 30) {
			$arr[$i] = rand(1,30);
		}
		print_r($arr);
	?>
</body>
</html>