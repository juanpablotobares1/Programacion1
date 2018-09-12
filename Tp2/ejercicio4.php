<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
</head>
<body>
	<?php 
		if (empty($_GET)) {
			echo "No se envio ningun dato <br>";
		} else {
			echo "Nombre: $_GET[Nombre]<br>";
			if (isset($_GET['Apellido'])) {
				echo "Apellido: $_GET[Apellido]<br>";
				echo "Edad: $_GET[Edad]";
			}
		}
		
	?>
</body>
</html>