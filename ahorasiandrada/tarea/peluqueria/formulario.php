<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
     <h1>Peluqueria de Alejo</h1>

    <form action="guardar.php" method="posts" >

        <p>ingrese su nombre </p>
        <input type="text" name="nombre" id="nombre">

        <p>ingrese su apellido</p>
        <input type="text" name="apellido" id="apellido">

        <p>ingrese su telefono </p>
        <input type="tel" name="telefono" id="telefono">

        <p>ingrese la fecha a la que vendrá </p>
        <input type="date" name="fecha" id="fecha">

        <p>ingrese a la hora a la que vendrá </p>
        <select name="hora" id="hora"></select>
        <br>

        <input type="submit" value="reservar">

        <br>

        <a href="eliminar.php">eliminar</a>
        <a href="actualizar.php">actualizar</a>

        <script src="js/index.js"></script>
</center>

    </form>
</body>
</html>