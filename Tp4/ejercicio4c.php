<?php

$servidor = 'localhost';
$usuario = 'juanpablo';
$clave = '9886398319';
$database = 'programacion1';

$conexion = new PDO("mysql: host=$servidor; dbname=$database", $usuario, $clave);
   
$sql = 'DELETE FROM persona WHERE id='.$_GET['id'];

$ejecsql = $conexion -> prepare($sql);
$ejecsql -> execute();

header('location: ejercicio4a.php');
die();
?>