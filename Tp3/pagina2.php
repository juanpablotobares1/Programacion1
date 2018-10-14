<!DOCTYPE html>
<html>
<head>
	<title>Pagina 2</title>
	<link rel="stylesheet" type="text/css" href="diseño.css">
</head>
<body>
<?php
session_start(); 
if (empty($_SESSION['usr'])|empty($_SESSION['pass'])) {
  	header('location: error.html');
  }  
echo "<h3>".$_SESSION['usr']."</h3>"; 
$fecha_2 = date('Y-m-d H:i:s')." ; pagina1.php";
$_SESSION['fecha_2'] = $fecha_2;
$archivo = fopen('fecha.txt', 'w+');
fwrite($archivo, $_SESSION['fecha_h'].PHP_EOL);
fwrite($archivo, $_SESSION['fecha_1'].PHP_EOL);
fwrite($archivo, $_SESSION['fecha_2'].PHP_EOL);
fwrite($archivo, $_SESSION['fecha_3'].PHP_EOL);
fclose($archivo); 
?>
<a href="pagina1.php">Pagina 1</a><br>
<a href="pagina3.php">Pagina 3</a><br>
<a href="receptor2ejercicio6.php">HOME</a><br>
</body>
</html>