<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $usr=$_POST['usr'];
        $pass=$_POST['pass'];
        $arr=array("juan"=>array("1234","juan@programacion.com"),
        "pablo" =>array("12345","pablo@programacion.com"),
        "alberto" =>array("123456","alberto@programacion.com"));
    if ($arr[$usr][0]==$pass) {
        $email=$arr[$usr][1];
        echo "El usuario a sido validado<br>Nombre de usuario: $usr<br>Contrasena: $pass<br>Email: $email";
    } else {
        echo "El usuario no ha sido validado (la contrasena o el usuario no coinciden)";
    }
    
?>
</body>
</html>