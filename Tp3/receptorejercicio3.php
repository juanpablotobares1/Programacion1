<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 3</title>
</head>
<body>
<?php
if (empty($_FILES['archivo']['name'])) {
	echo "No se a enviado ningun archivo";
} else {
	$archivo1 = $_FILES['archivo']['tmp_name'];
	$archivo2 = "importados/" . $_FILES['archivo']['name'];
	copy($archivo1, $archivo2);
	$archivo = fopen($archivo2, "r");
	while ($linea = fgets($archivo)) {
		echo "El archivo se a copiado en el directorio: importados<br>El contenido del archivo es:<br>".$linea;
	}
}	
?>
<form action="ejercicio3.html" method="get">
    <br><br><input type="submit" value="Volver">
</form>
</body>
</html>