<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
<?php
session_start();
$_SESSION['usr'] = $_POST['usr'];
$_SESSION['pass'] = $_POST['pass'];
header('Location: receptor2ejercicio6.php');
?>
<br><br>
<form action="ejercicio6.html">
	<input type="submit" name="volver" value="volver">
</form>
</body>
</html>