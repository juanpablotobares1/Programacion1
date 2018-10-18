<?php
$servidor='localhost';
$usuario='juanpablo';
$clave='9886398319';
$database='programacion1';

$conexion = new PDO("mysql:host=$servidor;dbname=$database",$usuario,$clave);

$datos=array('usuario' => $_POST['usr'],'clave' => $_POST['pass'],'habilitado' => 1,'rol' => "usuario");

$sql="INSERT INTO usuario (usuario,clave,habilitado,rol) VALUE (:usuario,:clave,:habilitado,:rol)";

$ejecsql = $conexion->prepare($sql);
$ejecsql ->execute($datos);

header('location: Inicio.html');
?>