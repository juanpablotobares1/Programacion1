<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="diseño.css">
</head>
<body>
<?php
session_start();   
if (empty($_SESSION['usr'])|empty($_SESSION['pass'])) {
  	header('location: error.html');
  }
?>
<header class="encabezado">
	<?php
	echo "<h3>".$_SESSION['usr']."</h3>"; 
	?>
</header>
<?php
$fecha_h = date('Y-m-d H:i:s')." ; receptor2ejercicio6.php";
$_SESSION['fecha_h'] = $fecha_h;
$archivo = fopen('fecha.txt', 'w+');
fwrite($archivo, $_SESSION['fecha_h'].PHP_EOL);
fwrite($archivo, $_SESSION['fecha_1'].PHP_EOL);
fwrite($archivo, $_SESSION['fecha_2'].PHP_EOL);
fwrite($archivo, $_SESSION['fecha_3'].PHP_EOL);
fclose($archivo);  
?>
<a href="pagina1.php">Pagina 1</a><br>
<a href="pagina2.php">Pagina 2</a><br>
<a href="pagina3.php">Pagina 3</a><br><br>
<form action="ejercicio6.html">
	<input type="submit" name="volver" value="Cerrar Sesion">
</form>
</body>
</html>