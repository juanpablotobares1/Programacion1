<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 7</title>
</head>
<body>
	<form>
		<?php
		$arr=array();
		for ($i=0; $i < $_GET['num']; $i++) { 
		  	echo "N°".++$nums."= <input type="text"><input type="submit" value="Enviar">";
		  }
		?>
	</form>
</body>
</html>