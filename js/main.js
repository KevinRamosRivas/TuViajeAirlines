const numAdultos = document.getElementById("numAdultos");
const numNinos = document.getElementById("numNinos");
const numBebes = document.getElementById("numBebes");
const origen = document.getElementById("origen");
const destino = document.getElementById("destino");
const form = document.querySelector(".form");
const btnBusqueda = document.getElementById("btnBusqueda");
const ida = document.getElementById("ida");
const vuelta = document.getElementById("vuelta");
const idaInput = document.getElementById("idaInput");
const vueltaInput = document.getElementById("idaInput");
const urlParams = new URLSearchParams(window.location.search);

document.addEventListener('DOMContentLoaded', () => {
    btnBusqueda.addEventListener('click', validateForm);
    if (urlParams.get('mensaje') == '1') {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'El pago fue realizado con exito. Gracias',
            showConfirmButton: false,
            timer: 1500
        })
    }
})


const validateForm = (e) =>{
    e.preventDefault();
    const valueAdultos = numAdultos.value;
    const valueNinos = numNinos.value;
    const valueBebes = numBebes.value;
    const valueOrigen = origen.value;
    const valueDestino = destino.value;
    if(valueAdultos >0){
        if(valueOrigen === '' || valueDestino === '' ){
            showError('Debe rellenar todos los campos');
            return;
        }
        if(valueBebes >= valueAdultos){
            showError('El numero de adultos debe ser mayor o igual al numero de bebes');
            return;
        }
        if(valueNinos >= valueAdultos){
            showError('El numero de adultos debe ser mayor o igual al numero de niños');
            return;
        }
    }
    else{
        showError('Debe incluirse al menos un adulto para realizar la busqueda');
        return;
    }
    console.log("ga");
    window.location.href = "busqdetallada.php";
}


const showError = (error) => {
    swal.fire({
        title: 'Error',
        text: error,
        icon: 'error',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#48BB78'
    })
}

function actualizar(opcion){
    console.log(opcion.value);
    if(opcion.value == 1){
        vuelta.style.display = "block";
        vueltaInput.style.display = "block"
    }
    if(opcion.value == 2){
        vuelta.style.display = "none";
        vueltaInput.style.display = "none" 
    }
}

function cerrarSesion(opcion){
    if(opcion.value ==1){
        window.location.href = "http://127.0.0.1:5500/index.html";
    }
}
