<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 3</title>
</head>
<body>
<h2>Base de Datos: programacion1</h2>
<h3>Tabla: persona</h3>
<p>Listado de datos:</p>

<table border="1">
<?php  
$servidor = 'localhost';
$usuario = 'juanpablo';
$clave = '9886398319';
$database = 'programacion1';

$conexion = new PDO("mysql: host=$servidor; dbname=$database", $usuario, $clave);

$sql = 'select * from persona';
$ejecsql = $conexion -> prepare($sql);
$ejecsql -> execute();

while ($fila = $ejecsql -> fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	foreach ($fila as $key) {
		echo "<td>";
		echo $key;
		echo "</td>";
	}
	echo "</tr>";
}
?>
</table><br>
<a href="ejercicio3.html">Agregar un nuevo registro a la tabla persona</a>
</body>
</html>