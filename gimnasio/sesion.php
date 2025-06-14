<?php
include('conexion.php');

session_start();

$usuario=$_REQUEST['usuario'];
$contraseña=$_REQUEST['contraseña'];
//password_hash($_POST['contraseña'], PASSWORD_BCRYPT);


$consulta= "SELECT * FROM staff where usuario = '$usuario' ";
$eje=$con->query($consulta); 

$datos=$eje->fetch_assoc();



if (password_verify($contraseña, $datos ['contraseña'])) {
    $_SESSION['usuario'] = $datos;
    header("location:staffver.php");
}else {
   echo "e";
}

// if ( $contraseña == $datos['contraseña'] && $usuario == $datos['usuario']) {
//     $_SESSION['usuario'] = $datos;
//     header("location:staffver.php");
// }else {
//    echo "e";
// }


