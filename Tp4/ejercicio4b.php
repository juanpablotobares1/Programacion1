<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 4</title>
</head>
<body>
<?php
$var = $_GET['id'];

$servidor = 'localhost';
$usuario = 'juanpablo';
$clave = '9886398319';
$database = 'programacion1';

$conexion = new PDO("mysql: host=$servidor; dbname=$database", $usuario, $clave);
    
$sql = 'select * from persona';

$ejecsql = $conexion -> prepare($sql);
$ejecsql -> execute();

$registro=array('id' => $var);

$sql = 'DELETE FROM persona WHERE id = :id';

$ejecsql = $conexion -> prepare($sql);
$ejecsql -> execute($registro);

header('location: ejercicio4a.php');
?>
</body>
</html>