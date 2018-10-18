<?php
session_start();
$servidor='localhost';
$usuario='juanpablo';
$clave='9886398319';
$database='programacion1';

$usr=$_POST['usr'];
$pass=$_POST['pass'];

$conexion=new PDO("mysql: host=$servidor;dbname=$database",$usuario,$clave);

$datos=array('usuario' => $usr, 'clave' => $pass, 'habilitado' => 1);
  
$sql = "SELECT usuario, clave FROM usuario WHERE usuario = :usuario AND clave = :clave AND habilitado = :habilitado";

$ejecsql = $conexion->prepare($sql);
$ejecsql ->execute($datos);
while($fila=$ejecsql->fetch(PDO::FETCH_ASSOC)){
  $c++;
}
if($c>0){
  $_SESSION['usr']=$usr;
  $_SESSION['login']=1;
  header('location: Home.php');
}else{
  header('location: Inicio.html');
}
?>