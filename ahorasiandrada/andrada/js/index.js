//llamamos al id del input

let id_del_input = document.getElementById('usuario');


id_del_input.addEventListener("change", verificarNombreUsuario);
//change el cambio de username
//cuando ocurre un cambio ejecutar la funcion verificarNombreUsuario
function verificarNombreUsuario() {
    //obtenemos el valor del nombre de usuario
    let nombre_usuario = id_del_input.value;
    
    //consulta asincronica
    
    //fetch que hace//
    //funcion de conexion asincronica hacer una conexion mientras sucede algo la conexion hacia donde se va hacer
    //va a hacer a un  archivo llamado verify user que esta en include
    fetch('verificar.php', {
        method: 'POST',
        body: JSON.stringify({ 'usuario': nombre_usuario })
    })
    //el valor que vuelve del php es verdadero o falso
    .then(response => response.text())
    .then(data => {
        //informamos al usuario
        document.getElementById('msj').innerHTML = data
    });
}

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