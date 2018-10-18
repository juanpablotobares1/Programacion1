<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
</head>
<body>
	<?php 
	session_start();

	echo "<h1>Bienvenido ".$_SESSION['usr']."</h1>";

      if ($_SESSION['rol'] == 'usuario'){
          header('location: Usuario.php');
      }
	
	?>
	<br>
	<a href="Usuario.php">Página de usuarios</a>
</body>
</html>