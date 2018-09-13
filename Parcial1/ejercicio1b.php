<!DOCTYPE html>
<html>
<head>
	<title>Parcial 1</title>
</head>
<body>
		<?php
			echo "<table>";
			$total = count($_POST);
			$tabla = ceil($total/2);
			for ($i=0; $i < $tabla; $i++) { 
			  	echo "<tr>";
			  	for ($j=0; $j < $tabla; $j++) { 
			  		$posicion = $j + $tabla*$i;
			  		if (isset($_POST['num'.$posicion])) {
			  			echo "<td>".$_POST['num'.$posicion]."</td>";
			  		}
			  	}
			  	echo "</tr>";
			  }
			  echo "<table>";
			  $media=0;
			  foreach ($_POST as $value) {
			    	$media+=(int)$value;
			    }
			  echo "Valor maximo: ".max($_POST)."<br>";
			  echo "Valor minimo: ".min($_POST)."<br>";
			  echo "La media es: ".$media/count($_POST)."<br>";  
		?>
</body>
</html>