<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       
        <p>contacto</p>

        <input type="tel" name="telefono">

        <input type="submit" value="eliminar">
    
    </form>
        
 <?php
    include ("conexion.php");

    //pido los datos del formulario
    $telefono1=$_REQUEST['telefono'];

    //verifico si existe esa cuenta con la consulta
    $consulta="SELECT * FROM turno WHERE telefono=$telefono1";

    //ejecuto la consulta
    $ejecutada=$con->query($consulta);

    //reviso si existe. num_rows para contar
    if ($ejecutada->num_rows==0) {
        echo "no existe turno";
    }else {
        //si existe el registro fetch assoc para devuelve las filas
        $fila=$ejecutada->fetch_assoc();
        
        echo "turno $fila[hora] $fila[fecha]";
        echo "estas seguro $fila[nombre] $fila[apellido] <a href='?id=$fila[id_turno]'>Si</a>  <a href='actualizar.php'>no</a>";
        
        if (isset($_REQUEST["id"])) {
           $id=$_REQUEST["id"];
           $consulta1="DELETE FROM turno WHERE id_turno=$id";
           $con->query($consulta1);
         }

    }

 ?>
</body>
</html>