<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 1</title>
</head>
<body>
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
	print_r($fila);
}
$registros = array(array('nombre' => 'Juan', 'apellido' => 'Tobares', 'documento' => '39842662', 'edad' => '22'),
					array('nombre' => 'Alejandra', 'apellido' => 'Gonzalez', 'documento' => '38234556', 'edad' => '23'),
					array('nombre' => 'Patricia', 'apellido' => 'Polito', 'documento' => '18595471', 'edad' => '50'));

foreach ($registros as $key) {
	$sql = "INSERT INTO persona (nombre, apellido, documento, edad) VALUES (:nombre, :apellido, :documento, :edad)";
	$ejecsql = $conexion -> prepare($sql);
	$ejecsql -> execute($key);
}

die();
?>
</body>
</html>
