<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2</title>
</head>
<body>
<form action="ejercicio2b.php" method="get">
    <?php
    //DIA
    echo "Hoy es: ".date("j-F-Y")."<br><br>";
    echo "Dia: <select name='dia'>";
    for ($i=1;$i < 32; $i++) {
        if ($i==date(j)) {
            echo "<option selected='true' value=".$i.">".$i."</option>";
        }else
            echo "<option value=".$i.">".$i."</option>";
    }
    echo "</select><br><br>";
    //MES
    echo "Mes: <select type='text' name='mes'>";
    $mes = array('1' => "Enero", '2'=>"Febrero",'3'=>"Marzo",'4'=>"Abril",'5'=>"Mayo",'6'=> "Junio",'7'=>"Julio",'8'=>"Agosto",'9'=>"Septiembre",'10'=>"Octubre",'11'=>"Noviembre",'12'=>"Diciembre" );
    for ($i=1;$i < 13; $i++) {
        if ($i==date(n)) {
            echo "<option selected='true' value=".$mes[$i].">".$mes[$i]."</option>";
        }else
            echo "<option value=".$mes[$i].">".$mes[$i]."</option>";
    }
    echo "</select><br><br>";
    //AÑO
    echo "Año: "."<select name='ano'>";
    for ($i=1900;$i < 2101; $i++){
        if ($i==date(Y)) {
            echo "<option selected='true' value=".$i.">".$i."</option>";
        }else
            echo "<option value=".$i.">".$i."</option>";
    }
    ?>
    </select><br><br>
    <label for='checkbox'>Mostrar formato corto:</label>
    
    Si <input type="radio" name="corto" value="1">
    No <input type="radio" name="largo" value="2"><br><br>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
</form>
</body>
</html>