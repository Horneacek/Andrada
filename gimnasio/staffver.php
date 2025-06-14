<?php
session_start();
include('conexion.php');
if (!isset($_SESSION['usuario'])) {
    header("location:sesion.php");
  
}  $_SESSION['usuario'];
$usuario = $_SESSION['usuario']['usuario']; 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .a{
            color: rgb(18, 219, 18);
        }
        .tabla {
            width: 300px;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
           
        }
        .tabla2 {
            width: 100px;
            padding: 20px;
            border-radius:  20px;
            text-align: center;
           background-color: grey;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
    <div class="tabla2">
    <p>Usuario <?php echo "<a class='a'>" .$usuario. "</a>"; ?></p>

    <p ><a href="cerrar.php">cerrar sesion</a></p></div>


   <center>
    <div class="tabla">
        <h2>Administrar </h2>
        <a href="mostrar.php">Mirar Clientes</a>
        <br>
        <a href="rcliente.php" >registrar clientes</a>
        <a href="mostrar.php" ></a>
    </div>  </center>
</body>
</html>
<?php

?>