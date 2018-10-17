<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
</head>
<body>
<h2>Base de Datos: programacion1</h2>
<h3>Tabla: persona</h3>
<p>Listado de datos:</p>

<?php  
$servidor = 'localhost';
$usuario = 'juanpablo';
$clave = '9886398319';
$database = 'programacion1';

$conexion = new PDO("mysql: host = $servidor; dbname = programacion1", $usuario, $clave);

$sql = 'select * from persona';


?>

</body>
</html>