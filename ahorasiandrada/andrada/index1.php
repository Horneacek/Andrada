<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>
   
    <form action="" method="POST" class="bg-secondary row">
        <h1>Iniciar Sesion</h1>
        <p class="col-md-4">Ingrese su usuario</p>
        <input type="text" name="usuario" id="usuario" class="col-md-8">
        <label id="msj"></label>
        <p class="col-md-4 my-1">Ingrese su contraseña</p>
        <input  type="password" name="contraseña" id="contraseña" class="col-md-8" >
       
        <input type="submit" value="enviar">
    </form>
<script src="js/index.js"></script>
    <?php
include ("conexion.php");
if (isset($_REQUEST['usuario'])) {
 

$usuario=$_REQUEST['usuario'];
///md5
$contraseña=password_hash($_POST['contraseña'], PASSWORD_BCRYPT);

$verificar="SELECT usuario FROM cliente WHERE usuario='$usuario'";
    $verificar2=$con->query($verificar);
if ($usuario=="" or $contraseña=="") {
    echo "llene los campos";
}else {
    

     if ($verificar2->num_rows>0) {
        echo "usuario en uso elige otro";
         }else {

$insertar="INSERT INTO cliente (usuario, contraseña) VALUES ('$usuario', '$contraseña')";
$con->query($insertar);
echo "se registró correctamente";
   }}}



    ////JAVASsript sin enviar verificar 
    //formulario js
    //change el cambio de username
    //de este documento cuyo id sea igual al username
    //cuuando ocurre un cambio ejecutar checkusername


    //fetch que hace//
    //funcion de conexion asincronica hacer una conexion mientras sucede algo la conexion hacia donde se va hacer
    //va a hacer a un  archivo llamado verify user que esta en include

    //verifyuser
   //busca ottro usuario con el mismo numero

   // checkusername
   // body json : convierte la informacion en json : es una forma de como se pasan los datos tiene una estrcutura determinada:
    //key:valor
    //clave user valor: valorusername--> le saca el texto le pasa el user
    //termnina de ejecutar eso y vuelve
    //then promesa te prometo que lo que recibis como respuesta es json
    //data=> 
    //una vez recibibdos los datops los recibe en data
    //tome texto que verfique con la bd e informe si existe o no el us
?>

</body>
</html>