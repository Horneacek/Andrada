<?php
include ("conexion.php");
$consulta="SELECT * FROM clientes";
$resultado1=$con->query($consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
         table{ 
    background-color: rgba(255, 255, 255, 0.4);
    border-radius: 20px;
    padding: 10px 50px;
   
    
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <table border="3">
        <tr>
            <th>nombre</th>
            <th>apellido</th>
            <th>dni</th>
            <th>fecha</th>
                <th>telefono</th>
                <th>membresia</th>
                <th>eliminar</th>
                <th>modificar</th>
        </tr>
        <?php
        while ($resultado11=$resultado1->fetch_assoc()) {
            
        
        ?>
        <tr>
            <td><?php echo $resultado11['nombre'];?></td>
            <td><?php echo $resultado11['apellido'];?></td>
            <td><?php echo $resultado11['dni'];?></td>
            <td><?php echo $resultado11['fecha'];?></td>
            <td><?php echo $resultado11['telefono'];?></td>
            <td><?php echo $resultado11['membresia'];?></td>
            
        </tr>
        <?php
      } 
      ?>
    </table>
    </center>
</body>
</html>