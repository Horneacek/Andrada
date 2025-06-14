<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="guardar.php" method="POST">
        <h1>Iniciar Sesion</h1>
        <p>Ingrese su nombre</p>
        <input type="text" name="nombre" id="nombre">
        <br>
        <p>Ingrese su apellido</p>
        <input type="text" name="apellido" id="apellido">
        <br>
        <p>Ingrese su usuario</p>
        <input type="text" name="usuario" id="usuario">
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>
let  elementUsername = document.getElementById('nombre');

elementUsername.addEventListener("change", checkUsername);

function checkUsername() {
    let valueUsername = elementUsername.value;
    
    fetch('verificar.php', {
        method: 'POST',
        body: JSON.stringify({'user' : valueUsername})
     } )
     .then(response=>response.json())
     .then(data=>{ 

});
 }
