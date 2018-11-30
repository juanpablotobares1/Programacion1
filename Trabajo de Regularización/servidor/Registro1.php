<?php  
	$servidor = 'localhost';
	$usuario = 'juanpablo';
	$clave = '9886398319';
	$database = 'transporte';

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$dni = $_POST['dni'];
	$usr = $_POST['usr'];
	$pass = $_POST['pass'];
	$vehiculo = $_POST['vehiculo'];
	$servicio = $_POST['servicio'];

	$conexion = new PDO("mysql:host=$servidor;dbname=$database",$usuario,$clave);

	$datos = array('nombre' => $nombre, 'apellido' => $apellido, 'email' => $email, 'dni' => $dni, 'vehiculo' => $vehiculo, 'servicio' => $servicio);

	$sql = "INSERT INTO chofer (nombre, apellido, email, dni, id_vehiculo, id_tipo_transporte) VALUES(:nombre, :apellido, :email, :dni, :vehiculo, :servicio)";

	$ejecsql = $conexion -> prepare($sql);
	$ejecsql -> execute($datos);

	$datos = array('vehiculo' => $vehiculo, 'servicio' => $servicio);

	$sql = "INSERT INTO vehiculo_transporte (id_vehiculo, id_tipo_transporte) VALUES(:vehiculo, :servicio)";

	$ejecsql = $conexion -> prepare($sql);
	$ejecsql -> execute($datos);

	$datos = array('usr' => $usr, 'pass' => $pass);

	$sql = "INSERT INTO usuario (usuario, clave) VALUES(:usr, :pass)";

	$ejecsql = $conexion -> prepare($sql);
	$ejecsql -> execute($datos);


	header('location: Home.php');
?>