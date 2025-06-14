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
        

        <?php
        include("conexion.php");
        if (isset($_REQUEST["fecha"])) {
            $fecha = $_REQUEST["fecha"];
            $consulta = "SELECT hora FROM turno WHERE fecha='$fecha'";
            $res = $con->query($consulta);
            while ($fila = $res->fetch_assoc()) {
                $a[] = $fila['hora'];
            }
        }
        echo "<select name='hora'>";
        for ($i = 9; $i < 20; $i++) {
            $tiempo = "$i:00:00";
            $ocupado = false;
            foreach ($a as $x) {
                if ($tiempo == $x) {
                    echo "<option>esta ocupado</option>";
                    $ocupado = true;
                }
            }
            if (!$ocupado) {
                echo "<option>$i:00</option>";
            }
        }
        echo "</select>";

        ?>
    

        <br>

        <input type="submit" value="reservar">

        <br>

        <a href="eliminar.php">eliminar</a>
        <a href="actualizar.php">actualizar</a>
</center>

    </form>
</body>
</html>