<?php
include ("conexion.php");
$consulta="SELECT * FROM turno";
$resultado1=$con->query($consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="3">
        <tr>
            <th>nombre</th>
            <th>apellido</th>
            <th>telefono</th>
            <th>fecha</th>
            <th>hora</th>
        </tr>
        <?php
        while ($resultado11=$resultado1->fetch_assoc()) {
            
        
        ?>
        <tr>
            <td><?php echo $resultado11['nombre'];?></td>
            <td><?php echo $resultado11['apellido'];?></td>
            <td><?php echo $resultado11['telefono'];?></td>
            <td><?php echo $resultado11['fecha'];?></td>
            <td><?php echo $resultado11['hora'];?></td>
        </tr>
        <?php
      } 
      ?>
    </table>
</body>
</html>