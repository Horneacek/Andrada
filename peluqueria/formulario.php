<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
   <center> <h1>Peluqueria de Alejo</h1>
    <br>
    <h1>ingrese sus datos</h1>
    <br>
    <form action="guardar.php" method="post">
        <p>Ingrese su nombre</p>
        <input type="text" name="nombre">
        <br>
        <p>Ingrese su apellido</p>
        <input type="text" name="apellido">
        <br>
         <p>Ingrese su telefono</p>
        <input type="number" name="telefono">
        <br>
        <br>
         <p>Ingrese que fecha vendra</p>
        <input type="date" name="fecha">
        <br>
        <br>
         <p>Ingrese la hora a la que vendra</p>
         <select name="hora" >
            
            <?php
           for ($i=9; $i <21 ; $i++) { 
            echo "<option>$i:00<option>";
           }
            ?>
         </select>
        
        <br>
        <input type="submit" value="enviar">
    </form>
           <a href="eliminar.php">eliminar</a>
           <a href="actualizar.php">actualizar</a>
</center>
</body>
</html>