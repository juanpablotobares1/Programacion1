<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 2</title>
</head>
<body>
	<?php
	if (isset($_GET['corto'])) {
		echo "Hoy es ".$_GET['dia']."/".$_GET['mes']."/".$_GET['ano'];
	} else {
		if (isset($_GET['largo'])) {
			echo "Hoy es ".$_GET['dia']." de ".$_GET['mes']." de ".$_GET['ano'];
		} else {
			echo "No eligio el tipo de formato para mostrar la fecha";
		}
		
	}
	echo "<br><br>Dia: <select name='dia'>";
    for ($i=1;$i < 32; $i++) {
        if ($i==$_GET['dia']) {
            echo "<option selected='true' value=".$i.">".$i."</option>";
        }else
            echo "<option value=".$i.">".$i."</option>";
    }
    echo "</select><br><br>";
    //MES
    echo "Mes: <select type='text' name='mes'>";
    $mes = array('1' => "Enero", '2'=>"Febrero",'3'=>"Marzo",'4'=>"Abril",'5'=>"Mayo",'6'=> "Junio",'7'=>"Julio",'8'=>"Agosto",'9'=>"Septiembre",'10'=>"Octubre",'11'=>"Noviembre",'12'=>"Diciembre" );
    for ($i=1;$i < 13; $i++) {
        if ($i==$_GET['mes']) {
            echo "<option selected='true' value=".$mes[$i].">".$mes[$i]."</option>";
        }else
            echo "<option value=".$mes[$i].">".$mes[$i]."</option>";
    }
    echo "</select><br><br>";
    //AÑO
    echo "Año: "."<select name='ano'>";
    for ($i=1900;$i < 2101; $i++){
        if ($i==$_GET['ano']) {
            echo "<option selected='true' value=".$i.">".$i."</option>";
        }else
            echo "<option value=".$i.">".$i."</option>";
    }
	?>
</body>
</html>