<?php  
	session_destroy();
	session_start();

	$servidor = 'localhost';
	$usuario = 'juanpablo';
	$clave = '9886398319';
	$database = 'transporte';

	$admin = $_POST['admin'];
	$pass = $_POST['pass'];

	$conexion = new PDO("mysql:host=$servidor;dbname=$database",$usuario,$clave);

	$datos = array('admin' => $admin, 'pass' => $pass);

	$sql = "SELECT admin, clave FROM admin WHERE admin = :admin AND clave = :pass";

	$ejecsql = $conexion -> prepare($sql);
	$ejecsql -> execute($datos);

	while ($fila=$ejecsql -> fetch(PDO::FETCH_ASSOC)) {
		$c++;
	}

	if ($c>0) {
		$_SESSION['admin'] = $admin;
		$_SESSION['loginadmin'] = 1;
		header('location: Home.php');
	} else {
		header('location: Inicio.html');
	}

?>