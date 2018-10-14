<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5</title>
</head>
<body>
<?php 
session_start();
$_SESSION['texto4']=$_POST['texto4'];
$_SESSION['texto5']=$_POST['texto5'];
$_SESSION['texto6']=$_POST['texto6'];
?>
<form action="receptor3ejercicio5.php" method="POST" enctype="multipart/form-data">
 	Texto 7: <input type="text" name="texto7">
 	Texto 8: <input type="text" name="texto8">
 	Texto 9: <input type="text" name="texto9">
 	<br><br><input type="submit" name="Enviar" value="Enviar textos">
</form>
</body>
</html>