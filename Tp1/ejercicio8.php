<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 8</title>
</head>
<body>
	<table border="1" bgcolor="red">
		<?php 
			$val=0;
			echo "<h1>TABLA</h1>";
			for ($i=0; $i < 5; $i++) { 
				echo "<tr>";
				for ($j=0; $j < 5; $j++) { 
					echo "<td>$val</td>";
					$val++;
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>