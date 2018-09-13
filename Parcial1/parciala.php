<!DOCTYPE html>
<html>
<head>
	<title>Parcial 1</title>
</head>
<body>
	<form action="parcialb.php" method="post">
		<?php
		if ($_POST['num']<5) {
			echo "Se deben generar como minimo 5 controles, por lo tanto el valor que ingreso anteriormente pasa a ser 5.<br><br>";
			$_POST['num']=5;
		}
		for ($i=0; $i < $_POST['num']; $i++) { 
		  	echo "N°".++$n." ";
		  	echo "<input type='number' name='num$i'><br><br>";
		  }
		?>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>