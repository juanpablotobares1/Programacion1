<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="../estilos/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body background="../imagenes/fondo.png">
	<?php  
	session_start(); 
	if (empty($_SESSION['loginadmin'])) {
		header('location: Inicio.html');
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
					echo "Administrador: ".$_SESSION['admin'];
					echo "<br><a href='Salir.php'>Cerrar Sesión</a>";
				?>
			</div>
		</div>
	</header>
	<br><br>
			<form action="Registro1.php" method="POST" class="margen">
				<h2>Agregar Chofer</h2><br>
				<table>
					<tr><td><p>Nombre:</p></td><td><input type="text" name="nombre"></td></tr>
					<tr><td><p>Apellido:</p></td><td><input type="text" name="apellido"></td></tr>
					<tr><td><p>Email:</p></td><td><input type="text" name="email"></td></tr>
					<tr><td><p>Documento:</p></td><td><input type="text" name="dni"></td></tr>
					<tr><td><p>Nombre de Usuario:</p></td><td><input type="text" name="usr"></td></tr>
					<tr><td><p>Contrase&ntilde;a:</p></td><td><input type="text" name="pass"></td></tr>
					<tr><td>Vehículos disponibles:</td><td><select name="vehiculo">
						<option value="1">Chevrolet Corsa</option>
						<option value="2">Chevrolet Prisma</option>
						<option value="3">Toyota Hilux</option>
						<option value="4">Volkswagen Amarok</option>					
					</select></td></tr>
					<tr><td>Empresa:</td><td><select name="servicio">
						<option value="1">Taxi</option>
						<option value="2">Remis</option>
						<option value="3">Uber</option>
						<option value="4">Cabify</option>					
					</select></td></tr>
				</table><br>
				<input type="submit" name="enviar" value="Registrar">
			</form>
</body>
</html>