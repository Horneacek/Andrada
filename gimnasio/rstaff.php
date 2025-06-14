<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staff</title>
    <style>
       .form{   background-color: rgba(255, 255, 255, 0.4);
    border-radius: 20px;
    padding: 40px 50px;
    width: 200px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
    
    }
    </style>
</head>
<body>

    <center>
        <h1>STAFF</h1>
    <div class="form">
        <h1>Gimnasio<sup ></sup></h1>
        
        <h4>Registrarse</h4>
    <form action="" method="get">
        <p>Usuario</p>
        <input type="text" name="usuario"  id="usuario">
        <label id="mensaje"></label>
        <p>Contraseña</p>
        <input type="password" name="contraseña">
        <br><br>
        <input type="submit" value="registrar"><p><a href="iniciar.php">volver</a></p>
    </form></div> </center>
    <script src="js/usuario.js"></script>
</body>
</html>
<?php 
include ("conexion.php");
if (isset($_REQUEST['usuario']) && isset($_REQUEST['contraseña'])) {

   $usuario=$_REQUEST['usuario'];
   $contraseña=password_hash($_REQUEST['contraseña'], PASSWORD_BCRYPT);

    $verificar="SELECT usuario FROM staff WHERE usuario='$usuario'";
    $verificar2=$con->query($verificar);

    if ($usuario=="" or $contraseña=="") {
        echo "llene los campos";
    }else {
        if ($verificar2->num_rows>0) {
            echo "usuario en uso elige otro";
        }else {
           
    
    $insertar="INSERT INTO staff (usuario, contraseña) VALUES ('$usuario', '$contraseña')";
    $con->query($insertar);
    echo "Registrado correctamente ir a <a href='iniciar.php'>iniciar sesion</a>";
    
}}}


?>