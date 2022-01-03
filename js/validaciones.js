const nombre = document.getElementById("nombres")
const apellido = document.getElementById("apellidos")
const email = document.getElementById("correo")
const pass = document.getElementById("contraseña")
const pass2 = document.getElementById("confirmar")
const parrafo = document.getElementById("warnings")


form.addEventListener("submit", e=>{
    e.preventDefault()
    let warnings = ""
    let entrar = false
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w{2,4})+$/
    parrafo.innerHTML = ""
    if(nombres.value.length < 4){
        warnings += 'El nombre no es valido <br>'
        entrar = "true"
    }
    if(apellidos.value.length < 4){
        warnings += 'El Apellido no es valido <br>'
        entrar = "true"
    }
    if(!regexEmail.test(email.value)){
        warnings += 'El email no es valido <br>'
        entrar = "true"
    }
    if(pass.value.length <8){
        warnings += 'La contraseña no es valida <br>'
        entrar = "true"
    }
    if(pass.value != pass2.value){
        warnings += 'Las contraseñas no coinciden <br>'
        entrar = "true"
    }
    if(entrar){
        parrafo.innerHTML = warnings
    }else{
        parrafo.innerHTML = "Registrado"
    }
})