<?php 
include ("conexion.php");

$datos = json_decode(file_get_contents("php://input"));


$dni = $datos->v;

$sql = "SELECT membresia FROM cliente WHERE dni = '$dni'";
$res = $con->query($sql);

$datos=$res->fetch_assoc();
if ($datos['membresia']->num_rows > 0) {
    echo "Membresía encontrada para DNI $dni";
} else {
    echo "No se encontró ninguna membresía para el DNI $dni";
}

