<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 5</title>
</head>
<body>
<?php
session_start();
$_SESSION['texto7'] = $_POST['texto7'];
$_SESSION['texto8'] = $_POST['texto8'];
$_SESSION['texto9'] = $_POST['texto9'];
echo "<h3>Todos los datos ingresados son:</h3>";
echo "Texto 1: ".$_SESSION['texto1']."<br>";
echo "Texto 2: ".$_SESSION['texto2']."<br>";
echo "Texto 3: ".$_SESSION['texto3']."<br>";
echo "Texto 4: ".$_SESSION['texto4']."<br>";
echo "Texto 5: ".$_SESSION['texto5']."<br>";
echo "Texto 6: ".$_SESSION['texto6']."<br>";
echo "Texto 7: ".$_SESSION['texto7']."<br>";
echo "Texto 8: ".$_SESSION['texto8']."<br>";
echo "Texto 9: ".$_SESSION['texto9'];
?>
</body>
</html>