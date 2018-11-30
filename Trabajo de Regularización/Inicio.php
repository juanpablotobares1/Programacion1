<?php  
	session_start();

	$servidor = 'localhost';
	$usuario = 'juanpablo';
	$clave = '9886398319';
	$database = 'transporte';

	$usr = $_POST['usr'];
	$pass = $_POST['pass'];

	$conexion = new PDO("mysql:host=$servidor;dbname=$database",$usuario,$clave);

	$datos = array('usr' => $usr, 'pass' => $pass);

	$sql = "SELECT usuario, clave FROM usuario WHERE usuario = :usr AND clave = :pass";

	$ejecsql = $conexion -> prepare($sql);
	$ejecsql -> execute($datos);

	while ($fila=$ejecsql -> fetch(PDO::FETCH_ASSOC)) {
		$c++;
	}

	if ($c>0) {
		$_SESSION['usr'] = $usr;
		$_SESSION['loginusr'] = 2;
		header('location: cliente/Home.php');
	} else {
		header('location: Inicio.html');
	}

?>