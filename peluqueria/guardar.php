<?php 
//conexion a la base de datos
include('conexion.php');


//llamamos a los datos del formulario
$a=$_REQUEST['nombre'];
$b=$_REQUEST['apellido'];
$c=$_REQUEST['telefono'];
$d=$_REQUEST['fecha'];
$e=$_REQUEST['hora'];


//busca en la base de datos turno con la misma fecha y hora
$ins="SELECT * FROM turno WHERE (fecha ='$d' AND hora ='$e') OR (telefono = '$c' AND DATE (fecha) > DATE (NOW()))";


//ejecutamos la consulta
$res=$con->query($ins);


//SIRVE PARA SABER LA CANTIDAD DE REGISTROS ENCONTRADOS ->NUM_ROWS
if ($res->num_rows>0) {
    echo "turno tomado";
}else {
    

//consulta insercion
$ins= "INSERT INTO turno (nombre, apellido, telefono, fecha, hora) VALUES ('$a', '$b', $c, '$d', '$e')";
//ejecutar la consulta
$con->query($ins);
}









?>