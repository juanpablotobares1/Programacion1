<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="../estilos/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body background="../imagenes/fondo.png">
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
					echo "<br><a href='Salir.php'>Cerrar Sesión</a><br><a href='../servidor/Inicio.php'>Administracion</a>";
				?>
			</div>
		</div>
	</header>
	<br><br>
<div class="panel panel-success" id="margen">
  <div class="panel-heading"><center><h2>TUS DATOS</h2></center></div>
  <table class="table">
	<th>ID</th><th>NOMBRE</th><th>APELLIDO</th><th>CORREO</th><th>DOCUMENTO</th><th>VEHÍCULO</th><th>EMPRESA</th><th>EDITAR</th>
	<?php  
	$servidor = 'localhost';
	$usuario = 'juanpablo';
	$clave = '9886398319';
	$database = 'transporte';

	$conexion = new PDO("mysql:host=$servidor;dbname=$database",$usuario,$clave);

	$sql = "SELECT id_chofer, nombre, apellido, email, dni, marca, modelo, empresa FROM chofer INNER JOIN vehiculo ON chofer.id_vehiculo = vehiculo.id_vehiculo INNER JOIN tipo_transporte ON chofer.id_tipo_transporte = tipo_transporte.id_tipo_transporte INNER JOIN usuario ON chofer.id_chofer = usuario.id_usuario WHERE usuario.usuario = '$usr' ";


	$ejecsql = $conexion -> prepare($sql);
	$ejecsql -> execute();

	$datos = $ejecsql -> fetchall();

	foreach ($datos as $key => $value) {
		echo "<tr>";
		echo "<td>".$value['id_chofer']."</td>";
		echo "<td>".$value['nombre']."</td>";
		echo "<td>".$value['apellido']."</td>";
		echo "<td>".$value['email']."</td>";
		echo "<td>".$value['dni']."</td>";
		echo "<td>".$value['marca']." ".$value['modelo']."</td>";
		echo "<td>".$value['empresa']."</td>";
		echo "<td><a href='Editar.php?id=".$value['id_chofer']."'><img src='../imagenes/lapiz.png' class='icono'></a></td>";
		echo "</tr>";
	}
	?>
	</table>
</div><center><h3>Google Maps</h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53609.021094306794!2d-68.89353869555735!3d-32.88325824031071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e093ec45179bf%3A0x205a78f6d20efa3a!2sMendoza%2C+Capital%2C+Mendoza!5e0!3m2!1ses-419!2sar!4v1543604709978" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></center>
</body>
</html>