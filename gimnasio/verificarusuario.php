<?php 
include ("conexion.php");

$datos = json_decode(file_get_contents("php://input"));


$nombre = $datos->usuario;

$sql = "SELECT * FROM staff WHERE usuario = '$nombre'";
$res = $con->query($sql);

if($res->num_rows == 0 ){
    echo "nombre de usuario valido";
}else{
    echo "Error: existe un usuario con el mismo nombre";
}