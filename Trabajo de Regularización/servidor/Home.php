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
	if (empty($_SESSION['loginadmin'])) {
		header('location: ../Inicio.php');
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
<div class="panel panel-success" id="margen">
  <div class="panel-heading"><center><h2>ADMINISTRACIÓN</h2></center></div>
  <div class="panel-body">
    <h3>Choferes registrados <img src="../imagenes/persona.png" class="icono2"></h3>
  </div>
  <table class="table">
	<th>ID</th><th>NOMBRE</th><th>APELLIDO</th><th>CORREO</th><th>DOCUMENTO</th><th>VEHÍCULO</th><th>EMPRESA</th><th>EDITAR</th><th>BORRAR</th>
	<?php  
	$servidor = 'localhost';
	$usuario = 'juanpablo';
	$clave = '9886398319';
	$database = 'transporte';

	$conexion = new PDO("mysql:host=$servidor;dbname=$database",$usuario,$clave);

	$sql = "SELECT id_chofer, nombre, apellido, email, dni, marca, modelo, empresa FROM chofer INNER JOIN vehiculo ON chofer.id_vehiculo = vehiculo.id_vehiculo INNER JOIN tipo_transporte ON chofer.id_tipo_transporte = tipo_transporte.id_tipo_transporte";


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
		echo "<td><a href='Eliminar.php?id=".$value['id_chofer']."'><img src='../imagenes/basura.png' class='icono'></a></td>";
		echo "</tr>";
	}
	?>
	<tr><td><a href="Registro.php"><img src="../imagenes/mas.png" class="icono3"></a></td>
</div>
</body>
</html>