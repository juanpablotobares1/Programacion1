<!DOCTYPE html>
<html>
<head>
	<title>USUARIO</title>
</head>
<body>
	<?php 

	session_start();

	echo "<h1>Bienvenido ".$_SESSION['usr']."</h1>";

	  if ($_SESSION['rol'] == 'administrador'){
          header('location: Admin.php');
      }

	?>
	<br>
	<a href="Admin.php">Página de administradores</a>
</body>
</html>
