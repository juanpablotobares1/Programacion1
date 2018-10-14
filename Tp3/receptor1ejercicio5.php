<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5</title>
</head>
<body>
<?php 
session_start();
$_SESSION['texto1']=$_POST['texto1'];
$_SESSION['texto2']=$_POST['texto2'];
$_SESSION['texto3']=$_POST['texto3'];
?>
<form action="receptor2ejercicio5.php" method="POST" enctype="multipart/form-data">
 	Texto 4: <input type="text" name="texto4">
 	Texto 5: <input type="text" name="texto5">
 	Texto 6: <input type="text" name="texto6">
 	<br><br><input type="submit" name="Enviar" value="Enviar textos">
</form>
</body>
</html>