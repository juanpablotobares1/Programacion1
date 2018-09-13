<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 7</title>
</head>
<body>
	<form action="ejercicio7b.php" method="post">
		<?php
		for ($i=0; $i < $_POST['num']; $i++) { 
		  	echo "N°".++$n." ";
		  	echo "<input type='number' name='num$i'><br><br>";
		  }
		?>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>