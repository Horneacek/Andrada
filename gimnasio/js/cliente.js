
let inputdelamembresia = document.getElementById('dni');

inputdelamembresia.addEventListener("change", verificarmembresia);


function verificarmembresia() {
   
    let lmembresia = inputdelamembresia.value;
    
    
    fetch('verificarmembresia.php', {
        method: 'POST',
        body: JSON.stringify({ 'v': lmembresia })
    })
    
    .then(response => response.text())
   
    .then(data => {
      
        document.getElementById('mensaje').innerHTML = data
    });
}