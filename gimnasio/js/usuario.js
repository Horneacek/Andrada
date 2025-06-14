//llamamos al id del input
let inputdelusuario = document.getElementById('usuario');

//cuando ocurre un cambio ejecutar la funcion verificarusuario
//(cuando el usuario modifica el valor del campo)
inputdelusuario.addEventListener("change", verificarusuario);


function verificarusuario() {
   // Obtiene el valor actual del campo de entrada
    //obtenemos el valor del nombre de usuario
    let nombre_usuario = inputdelusuario.value;
    
    
    fetch('verificarusuario.php', {
        method: 'POST',
        body: JSON.stringify({ 'usuario': nombre_usuario })
    })
    //Cuando la respuesta del servidor llega, convierte la respuesta en texto.
    .then(response => response.text())
    //Cuando la respuesta del servidor llega, convierte la respuesta en texto.
    .then(data => {
       // Actualiza el contenido del elemento HTML con id igual a 'mensaje' con el contenido de data, que probablemente sea un mensaje de respuesta del servidor (por ejemplo, "Usuario disponible" o "Usuario ya registrado")
        document.getElementById('mensaje').innerHTML = data
    });
}

    