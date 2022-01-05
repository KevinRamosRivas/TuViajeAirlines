const nombre = document.getElementById("nombres")
const apellido = document.getElementById("apellidos")
const email = document.getElementById("correo")
const pass = document.getElementById("contraseña")
const pass2 = document.getElementById("confirmar")
const parrafo = document.getElementById("warnings")
const user = document.getElementById("user");
const password = document.getElementById("password");
const btnIniciar = document.getElementById("btnIngresar");
const formIniciar = document.querySelector('.formIniciar');



document.addEventListener('DOMContentLoaded', () => {
    btnIniciar.addEventListener('click', validateForm);
})


form.addEventListener("submit", e=>{
    e.preventDefault()
    let warnings = ""
    let entrar = false
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w{2,4})+$/
    parrafo.innerHTML = ""
    if(nombres.value === '' || apellidos.value === '' || email.value === '' || pass.value === ''){
        showError('Debe rellenar todos los campos');
        return;
    }
    if(nombres.value.length < 4){
        showError('El nombre debe contar con mas de 4 caracteres');
        return;
        warnings += 'El nombre no es valido <br>';
        entrar = "true";
    }
    if(apellidos.value.length < 4){
        showError('El apellido debe contar con mas de 4 caracteres');
        return;
        warnings += 'El Apellido no es valido <br>';
        entrar = "true";
    }
    if(!regexEmail.test(email.value)){
        showError('El email introducido no es valido');
        return;
        warnings += 'El email no es valido <br>';
        entrar = "true";
    }
    if(pass.value.length <8){
        showError('La contraseña debe contar con mas de 8 caracteres');
        return;
        warnings += 'La contraseña no es valida <br>';
        entrar = "true";
    }
    if(pass.value != pass2.value){
        showError('Las contraseñas no coinciden');
        return;
        warnings += 'Las contraseñas no coinciden <br>';
        entrar = "true";
    }
    if(entrar){
        parrafo.innerHTML = warnings
    }else{
        swal.fire({
            text: 'Se registro exitosamente al usuario',
            icon: 'success',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'
        })
        return;
    }
})

const showError = (error) => {
    swal.fire({
        title: 'Error',
        text: error,
        icon: 'error',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#48BB78'
    })
}

const validateForm = (e) => {
    e.preventDefault();
    const usuarioValue = user.value;
    const contraseniaValue = password.value;
    

    if (usuarioValue === '' || contraseniaValue === '' ) {
        swal.fire({
            title: 'Error',
            text: 'Debe completar todos los campos',
            icon: 'error',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'
        })
        return;
    }
    form.submit();
    form.reset();
}
