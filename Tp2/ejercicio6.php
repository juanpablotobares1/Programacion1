<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
</head>
<body>
<table border="1">
	<?php
		$num=0;
		for ($i=0; $i < $_GET['fil']; $i++) { 
			echo "<tr>";
			for ($j=0; $j < $_GET['col']; $j++) { 
				echo "<td>$num</td>";
				$num++;
			}
			echo "</tr>";
		  }  
	?>
</table>
</body>
</html>