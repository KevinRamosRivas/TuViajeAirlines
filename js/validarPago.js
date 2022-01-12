const formularioTarjeta = document.querySelector(".form");
const inputNumero = document.getElementById("inputNumero");
const inputNombre = document.getElementById("inputNombre");
const selectMes = document.getElementById("selectMes");
const selectYear = document.getElementById("selectYear");
const inputCCV = document.getElementById("inputCCV");
const inputDireccion = document.getElementById("inputDireccion");
const inputCiudad = document.getElementById("inputCiudad");
const selectDepartamento = document.getElementById("selectDepartamento");
const inputCP = document.getElementById("inputCP");
const btnEnviar = document.getElementById("btnEnviar");



document.addEventListener('DOMContentLoaded', () => {
    btnEnviar.addEventListener('click', validateForm);
})


const validateForm = (e) => {
    e.preventDefault();
    const numeroTarjeta = inputNumero.value; 
    const nombreTarjeta = inputNombre.value; 
    const mesTarjeta = selectMes.value;
    const anioTarjeta= selectYear.value;
    const ccvTarjeta =inputCCV.value;
    const direccionCliente = inputDireccion.value; 
    const ciudadCliente = inputCiudad.value; 
    const depCiente = selectDepartamento.value; 
    const codPostal = inputCP.value;
    console.log(numeroTarjeta,nombreTarjeta,mesTarjeta,anioTarjeta ,ccvTarjeta ,direccionCliente,ciudadCliente,depCiente ,codPostal);
    if(numeroTarjeta === '' || nombreTarjeta === '' ||
    mesTarjeta === ''|| anioTarjeta ==='' ||ccvTarjeta ===''
    ||direccionCliente === '' || ciudadCliente ===  ''||
    depCiente === ''|| codPostal === '' ){
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