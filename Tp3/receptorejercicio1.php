<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 1</title>
</head>
<body>	
	<?php
		echo "Archivo Recibido: <br><br>";
		if (empty($_FILES['archivo']['name'])) {
    		echo "No envio ningun archivo <br><br>";
		}else{
   			$archivo=fopen($_FILES['archivo']['tmp_name'],"r");
   			while ($arch = fgets($archivo)) {
   				echo $arch."<br><br>";
   			}
   			fclose($archivo);
		}

	?>
<form action="ejercicio1.html" method="get">
    <br><br><input type="submit" value="Volver">
</form>
</body>
</html>