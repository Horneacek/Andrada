<?php
include ("conexion.php");
$a=$_REQUEST['nombre'];
$b=$_REQUEST['apellido'];
$c=$_REQUEST['telefono'];
$d=$_REQUEST['fecha'];
$e=$_REQUEST['hora'];

//generar consulta SSQL
$act="UPDATE turno SET nombre='$a', apellido='$b', telefono='$c', fecha='$c', hora='$d'";

//EJECUTAMOS
$con->query($act);


if (isset($_REQUEST["id"])) {
    $id=$_REQUEST["id"];
    $consulta1="UPDATE turno SET nombre='$nombre', apellido='$apellido', telefono='$telefono', fehcha='$fecha' WHERE id_turno=$id";
    $con->query($consulta1);
  }
