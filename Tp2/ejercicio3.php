<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 3</title>
</head>
<body>
	<?php  
		echo "Textbox 1: $_GET[texto1]<br>Textbox 2: $_GET[texto2]<br><br>";
		echo "Hidden: $_GET[oculto]<br><br>";
		echo "Password: $_GET[clave]<br><br>";
		if (isset($_GET['check1'])) {
			echo "Check 1: Seleccionado <br>";
		} else {
			echo "Check 1: No seleccionado<br>";
		}
		if (isset($_GET['check2'])) {
			echo "Check 2: Seleccionado<br>";
		} else {
			echo "Check 2: No seleccionado<br>";
		}
		if (isset($_GET['check3'])) {
			echo "Check 3: Seleccionado<br>";
		} else {
			echo "Check 3: No seleccionado<br>";
		}
		echo "<br>";
		if (isset($_GET['grupo1'])) {
			switch ($_GET['grupo1']) {
				case '1':
					echo "Radio Grupo 1: 1° item seleccionado";
					break;

				case '2':
					echo "Radio Grupo 1: 2° item seleccionado";
					break;

				case '3':
					echo "Radio Grupo 1: 3° item seleccionado";
					break;
			}

		} else {
			echo "Radio Grupo 1: No seleccion&oacute; ning&uacute;n item";
		}
		echo "<br>";
		if (isset($_GET['grupo2'])) {
			switch ($_GET['grupo2']) {
				case '1':
					echo "Radio Grupo 2: 1° item seleccionado";
					break;

				case '2':
					echo "Radio Grupo 2: 2° item seleccionado";
					break;

				case '3':
					echo "Radio Grupo 2: 3° item seleccionado";
					break;
			}
			
		} else {
			echo "Radio Grupo 2: No seleccion&oacute; ning&uacute;n item";
		}
		echo "<br><br>";
		echo "Lista desplegable: $_GET[select]";
		
	?>
</body>
</html>