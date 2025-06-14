<?php
include ("conexion.php");

$usuario=$_REQUEST['usuario'];
$contraseña=$_POST['contraseña'];


$verificar="SELECT usuario FROM cliente WHERE usuario='$usuario'";
    $verificar2=$con->query($verificar);

     if ($verificar2->num_rows>0) {
        echo "usuario en uso";
         }else {

$insertar="INSERT INTO cliente (nombre, apellido, usuario) VALUES ('$nombre', '$apellido', '$usuario')";
$con->query($insertar);
echo "se registró correctamente";
   }
?>


