<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="">
        <a>ingrese su numero</a>
        <input type="number" name="telefono">
        <input type="submit" value="enviar">
    </form>
</body>
</html>



<?php
include ("conexion.php");
 $telefono1=$_REQUEST['telefono'];
    $sel="SELECT * FROM turno WHERE telefono='$telefono1'";
  
    $res=$con->query($sel);
    $fila=$res->fetch_assoc();
    if ($res->num_rows==0) {
       echo "no existe turno asociado a ese numero";
    }else {
        
    
?>
<form action="" method="get">
    <h1>actualizar</h1>
    <h3>Nombre</h3>
    <input type="text" name="nombre" value="<?php echo $fila['nombre']?>">
    <br>
    <h1>apellido</h1>
    <input type="text" name="apellido" value="<?php echo $fila['apellido']?>">
    <br>
    <h3>telefono</h3>
    <input type="number" name="telefono" value="<?php echo $fila['telefono']?>">
    <br>
    <h3>fecha</h3>
    <input type="date" name="fecha" value="<?php echo $fila['fecha']?>">
    <br>
    <h3>hora</h3>
    <select>
        <?php 
        for ($i=8; $i <21; $i++) { 
            echo "<option name='hora'>$i:00</option>";
        }
        
        ?>
    </select>  <?php echo "<a href='?id=$fila[id_turno]'>Si</a>"; ?></form>
   


<?php






}
?>







