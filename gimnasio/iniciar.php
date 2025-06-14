<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staff</title>
    <style>
       .form{   background-color: rgba(255, 255, 255, 0.4);
    border-radius: 20px;
    padding: 80px 50px;
    width: 250px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
    
    }
    body {
            
            background-attachment: fixed;
             background-position: center;
              background-repeat: no-repeat;

               height: 100%;
               padding-top: 5%;
           }
    </style>
</head>
<body background= >
    
    <center>
        <h1>STAFF</h1>
    <div class="form">
        <h1>Gimnasio<sup ></sup></h1>
        
        <h4>Inicar Sesion o <a href="rstaff.php">Crea una cuenta</a></h4>
    <form action="sesion.php" method="get">
        <p>Usuario</p>
        <input type="text" name="usuario">
        <p>Contraseña</p>
        <input type="password" name="contraseña">
        <br><br>
        <input type="submit" value="Iniciar">
        <br>
        
    </form></div> </center>
    
</body>
</html>
<?php
