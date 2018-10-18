<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 5</title>
</head>
<body>
<?php

$servidor = 'localhost';
$usuario = 'juanpablo';
$clave = '9886398319';
$database = 'programacion1';

$conexion = new PDO("mysql: host=$servidor; dbname=$database", $usuario, $clave);
$sql = 'SELECT * FROM persona WHERE id='.$_GET['id'];
$ejecsql = $conexion -> prepare($sql);
$ejecsql -> execute();
$datos = $ejecsql -> fetch(PDO::FETCH_ASSOC);

echo "	<p>Ingrese los nuevos datos</p>
		<form action='' method='POST' enctype=multipart/form-data>
		<table>
			<tr><td>Nombre:</td><td><input type='text' name='nombre' value='".$datos['nombre']."'></td></tr>
			<tr><td>Apellido:</td><td><input type='text' name='apellido' value='".$datos['apellido']."'></td></tr>
			<tr><td>Documento:</td><td><input type='text' name='doc' value='".$datos['documento']."'></td></tr>
			<tr><td>Edad:</td><td><input type='text' name='edad' value='".$datos['edad']."'></td></tr>
		</table><br>
		<input type='submit' name='enviar' value='Aceptar'>
		</form>";

if (empty($_POST['nombre'])) {
} else {
	$sql = "UPDATE persona SET nombre='" . $_POST['nombre'] . "',apellido='" . $_POST['apellido'] . "',documento='" . $_POST['doc'] . "',edad='" . $_POST['edad'] . "' WHERE id=" . $_GET['id'];
    $ejecucionSQLPDO = $conexion->prepare($sql);
    $ejecucionSQLPDO->execute();
    header('location: ejercicio5a.php');
}

?>
</body>
</html>