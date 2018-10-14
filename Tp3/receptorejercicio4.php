<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
</head>
<body>
<?php  
//Verifico si se envia algun archivo
if (empty($_FILES['archivo']['name'])) {
	echo "No se a enviado ningun archivo";
} else {
//Verifico que el archivo enviado es una imagen jpg o png
	if ($_FILES['archivo']['type'] == "image/jpeg" || $_FILES['archivo']['type'] == "image/png") {
//Copio archivo en el directorio importados
		$archivo1 = $_FILES['archivo']['tmp_name'];
		$archivo2 = "importados/" . $_FILES['archivo']['name'];
		copy($archivo1, $archivo2);
		echo "La imagen se ha copiado en el directorio: importados";
//Muestro la/s imagenes por pantalla
		$arreglo = scandir('importados');
		unset($arreglo[0],$arreglo[1]);
		foreach ($arreglo as $value){
        echo "<br><br>".$value."<br><img src='importados/".$value."'><br>";
        }			
	} else {
		echo "El archivo enviado no es una imagen";
	}
}

?>
<form action="ejercicio4.html" method="get">
    <br><br><input type="submit" value="Volver">
</form>
</body>
</html>