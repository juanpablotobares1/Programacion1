
 <?php
  session_start();

$servidor='localhost';
$usuario='juanpablo';
$clave='9886398319';
$database='programacion1';

  $conexion = new PDO("mysql:host=$servidor;dbname=$database",$usuario,$clave);

  $sql = "SELECT rol FROM usuario WHERE usuario='".$_SESSION['usr']."'";

  $ejecsql = $conexion->prepare($sql);
  $ejecsql ->execute();

  $datos= $ejecsql->fetch(PDO::FETCH_ASSOC);

  if(empty($_SESSION['login'])){
      header('Location: Inicio.html');
      exit;
  }else{
      if ($datos['rol'] == 'usuario'){
          $_SESSION['rol']=$datos['rol'];
          header('location: Usuario.php');
      }else{
          $_SESSION['rol']=$datos['rol'];
          header('location: Admin.php');
      }
  }
      ?>
