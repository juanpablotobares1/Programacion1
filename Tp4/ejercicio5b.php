<?php  
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$doc = $_POST['doc'];
$edad = $_POST['edad'];

$servidor = 'localhost';
$usuario = 'juanpablo';
$clave = '9886398319';
$database = 'programacion1';

$conexion = new PDO("mysql: host=$servidor; dbname=$database", $usuario, $clave);

$registro = array('nombre' => $nombre, 'apellido' => $apellido, 'documento' => $doc, 'edad' => $edad);

$sql = "INSERT INTO persona (nombre, apellido, documento, edad) VALUES (:nombre, :apellido, :documento, :edad)";

$ejecsql = $conexion -> prepare($sql);
$ejecsql -> execute($registro);

header('location: ejercicio5a.php');
die();
?>