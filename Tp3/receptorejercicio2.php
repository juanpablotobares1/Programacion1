<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2</title>
</head>
<body>
    
<?php
if (empty($_FILES['archivo']['name'])) {
    echo "No ingreso ningun archivo";
}else {
    echo '<table border="5">';
    $archivo = fopen($_FILES['archivo']['tmp_name'], "r");
    $num_filas = 0;
    while (!feof($archivo) && $num_filas < 100) {
        $num_filas += 1;
        $data = fgets($archivo);
        echo "<tr><td>" . str_replace(';', '</td><td>', $data) . '</td></tr>';
    }
    echo '</table>';
    fclose($archivo);
}
?>
<form action="ejercicio2.html" method="get">
    <br><br><input type="submit" value="Volver">
</form>
</body>
</html>