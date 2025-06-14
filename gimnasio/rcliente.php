<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gimnasio</title>
    <link rel="icon" href="fotos/o.png"  width="146" height="89">
    <style>
    
    h1 {
        font-family : arial;
        text-decoration: none;
    }
    .form{
    background-color: rgba(255, 255, 255, 0.4);
    border-radius: 20px;
    padding: 10px 50px;
    width: 200px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
    
    
}              body {
            
            background-attachment: fixed;
             background-position: center;
              background-repeat: no-repeat;
              background-size: cover;
               height: 100%;
               padding-top: 5%;
           }
          
           
    
</style>
</head>
<?php

//llamaar a la base
include ('conexion.php');
//genero la consulta
$sel="SELECT id_membresia, nombre FROM membresia";
//ejecutamos consulta
$r=$con->query($sel);


?>

<body background="">
    <table align="right"  width="30%" heigth="60%" style="text-align: center;">
    
       
        <tr><td>
        </td></tr>
    </table>
   <center>
    
   <div class="form">
    <h1>Gimnasio<sup ></sup></h1>
    
    <h4>Registrar clientes</h4>
<form action="" method="get">
    <p>Nombre</p>
    <input type="text" name="nombre">
    <p>Apellido</p>
    <input type="text" name="apellido">
    <p>DNI</p>
    <input type="number" name="dni" id="dni">
    <p>fecha de alta</p>
    <input type="date" name="fecha">
    <p>Telefono</p>
    <input type="tel" name="telefono">
    <label id="mensaje"></label>
    <p>Tipo de membresia</p>
           <select name="membresia" > 
    <option value="0" id="membresia">Selecciona el tipo de membresia</option>
    <?php
    while($dato2 = $r->fetch_assoc()){
    echo "<option value='",$dato2["id_membresia"]."'>".$dato2["nombre"]."</option>";
    }
    
    ?>

    <br><br>
    <input type="submit" value="registrar">
</form></div> </center>

</body>
</html>
<!--https://es.gamewallpapers.com/img_script/wallpaper_dir/img.php?src=wallpaper_perfect_world_international_descent_03_2560x1440.jpg&height=450&width=800&fill-to-fit&sharpen-->


<?php 

if (isset($_REQUEST['nombre']) && isset($_REQUEST['apellido']) && isset($_REQUEST['dni']) && isset($_REQUEST['fecha']) && isset($_REQUEST['telefono']) && isset($_REQUEST['membresia'])) {

   
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $dni = $_REQUEST['dni'];
    $fecha = $_REQUEST['fecha'];
    $telefono = $_REQUEST['telefono'];
    $membresia = $_REQUEST['membresia'];

   
    $ins = "INSERT INTO clientes (nombre, apellido, dni, fecha, telefono, membresia) 
            VALUES ('$nombre', '$apellido', '$dni', '$fecha', '$telefono', '$membresia')";

    
    include('conexion.php');

   
    $resultado = $con->query($ins);

   
}

?>

?>