const nombresCliente = document.getElementById("nombresCliente");
const apellidosCliente = document.getElementById("apellidosCliente");
const dateNacimiento = document.getElementById("dateNacimiento");
const tipoDocumento = document.getElementById("tipoDocumento");
const numIdentidad = document.getElementById("numIdentidad");
const emailCliente = document.getElementById("emailCliente");
const generoCliente = document.getElementById("generoCliente");
const telCliente = document.getElementById("telCliente");
const btnCliente = document.getElementById("btnCliente");
const datosCliente = document.querySelector(".datosCliente");
const nIden = document.getElementById("nIden");
document.addEventListener('DOMContentLoaded', () => {
    btnCliente.addEventListener('click', validateForm);
})


const validateForm = (e) => {
    e.preventDefault();
    const nombres = nombresCliente.value;
    const apellidos = apellidosCliente.value;
    const diaNacimiento = dateNacimiento.value;
    const tipDocumento = tipoDocumento.value;
    const num_identidad = numIdentidad.value;
    const email = emailCliente.value;
    const genero = generoCliente.value;
    const telefono = telCliente.value; 

    if(nombres === '' || apellidos === '' ||
    diaNacimiento === ''|| tipDocumento ==='' ||num_identidad ===''
    ||email === '' || genero ===  ''||
    telefono === ''){
        console.log("ga");
        swal.fire({
            title: 'Error',
            text: 'Debe completar todos los campos',
            icon: 'error',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'
        })
        return;
    }
    else{
        window.location.href = "http://127.0.0.1:5500/index_copia_prueba.html?mensaje=1";
    }
    
}

function cambiar(id){
    console.log(id);
    if(id==1){
        nIden.innerHTML = '<label for="numIdentidad" class="form-label">Numero de pasaporte</label> <input type="password" class="form-control" id="numIdentidad">';
    }
    if(id==2){
        nIden.innerHTML = '<label for="numIdentidad" class="form-label">Numero de DNI</label> <input type="password" class="form-control" id="numIdentidad">';
    }
}