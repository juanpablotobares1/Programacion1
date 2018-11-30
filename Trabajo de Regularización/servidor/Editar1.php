<?php

session_start();

$servidor = 'localhost';
$usuario = 'juanpablo';
$clave = '9886398319';
$database = 'transporte';

$conexion = new PDO("mysql:host=$servidor;dbname=$database",$usuario,$clave);

$sql = "UPDATE chofer SET nombre='" . $_POST['nombre'] . "',apellido='" . $_POST['apellido'] . "',email='" . $_POST['email'] . "',dni='" . $_POST['dni'] . "',id_vehiculo='" . $_POST['vehiculo'] . "',id_tipo_transporte='" . $_POST['servicio'] . "' WHERE id_chofer=" . $_SESSION['id'];
$ejecucionSQLPDO = $conexion->prepare($sql);
$ejecucionSQLPDO->execute();

$sql = "UPDATE vehiculo_transporte SET id_vehiculo='" . $_POST['vehiculo'] . "',id_tipo_transporte='" . $_POST['servicio'] . "' WHERE id_vehiculo_transporte=" . $_SESSION['id'];
$ejecucionSQLPDO = $conexion->prepare($sql);
$ejecucionSQLPDO->execute();

if (empty($_SESSION['admin'])) {
	header('location: ../cliente/Home.php');
} else {
	header('location: Home.php');
}

?>