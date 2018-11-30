<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="../estilos/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body background="imagenes/fondo.png">
	<?php  
	session_start(); 
	if (empty($_SESSION['loginusr'])) {
		header('location: ../Inicio.html');
		exit;
	}
	?>
	<header class="borde2">
		<div class="row">
			<div class="col-md-4">
				<h2>SERVICIO DE TRANSPORTE</h2>
				<h3>Gobierno de la Nación <img src="../imagenes/logo.png" class="imghead1"></h3>
			</div>
			<div class="col-md-4">
				<center><img src="../imagenes/autos.png" class="imghead"></center>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2"><br>
				<?php  
					$usr = $_SESSION['usr'];
					echo "Usuario: ".$usr;
					echo "<br><a href='Salir.php'>Cerrar Sesión</a><br><a href='../servidor/Inicio.html'>Administracion</a>";
				?>
			</div>
		</div>
	</header>
	<br><br>
<?php
$servidor = 'localhost';
$usuario = 'juanpablo';
$clave = '9886398319';
$database = 'transporte';

$conexion = new PDO("mysql:host=$servidor;dbname=$database",$usuario,$clave);

$sql = 'SELECT * FROM chofer WHERE id_chofer='.$_GET['id'];

$ejecsql = $conexion -> prepare($sql);
$ejecsql -> execute();

$datos = $ejecsql -> fetch(PDO::FETCH_ASSOC);

echo "
			<form action='../servidor/Editar1.php' method='POST' enctype='multipart/form-data' class='margen'>
			<h2>".$datos['nombre']." modifica tus datos:</h2><br>
				<table>
					<tr><td><p>Nombre:</p></td><td><input type='text' name='nombre' value='".$datos['nombre']."'></td></tr>
					<tr><td><p>Apellido:</p></td><td><input type='text' name='apellido' value='".$datos['apellido']."'></td></tr>
					<tr><td><p>Email:</p></td><td><input type='text' name='email' value='".$datos['email']."'></td></tr>
					<tr><td><p>Documento:</p></td><td><input type='text' name='dni' value='".$datos['dni']."'></td></tr>
					<tr><td>Vehículos disponibles:</td><td><select name='vehiculo' value='".$datos['id_vehiculo']."'>
						<option value='1' ".($datos['id_vehiculo'] == 1 ? "selected='selected'" : "").">Chevrolet Corsa</option>
						<option value='2' ".($datos['id_vehiculo'] == 2 ? "selected='selected'" : "").">Chevrolet Prisma</option>
						<option value='3' ".($datos['id_vehiculo'] == 3 ? "selected='selected'" : "").">Toyota Hilux</option>
						<option value='4' ".($datos['id_vehiculo'] == 4 ? "selected='selected'" : "").">Volkswagen Amarok</option>					
					</select></td></tr>
					<tr><td>Empresa:</td><td><select name='servicio' value='".$datos['id_tipo_transporte']."'>
						<option value='1' ".($datos['id_tipo_transporte'] == 1 ? "selected='selected'" : "").">Taxi</option>
						<option value='2' ".($datos['id_tipo_transporte'] == 2 ? "selected='selected'" : "").">Remis</option>
						<option value='3' ".($datos['id_tipo_transporte'] == 3 ? "selected='selected'" : "").">Uber</option>
						<option value='4' ".($datos['id_tipo_transporte'] == 4 ? "selected='selected'" : "").">Cabify</option>					
					</select></td></tr>
				</table><br>
				<input type='submit' name='enviar' value='Aceptar'>
			</form>
	";
	$_SESSION['id'] = $_GET['id'];
?>
</body>
</html>