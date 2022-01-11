const btnEnviar = document.getElementById("btnEnviar");
const numAsiento = document.getElementById("numAsiento");
const form = document.querySelector(".form");
var asiento = null ;
document.addEventListener('DOMContentLoaded', () => {
    btnEnviar.addEventListener('click',enviarDato);
})


const enviarDato = (e) =>{
    e.preventDefault();
    var a = asiento.value;
    numAsiento.setAttribute('value',a);
    console.log(numAsiento.getAttribute("value"));
    form.submit();

}
function verificarDisponibilidad(id){
    asiento = document.getElementById(id);
    var a = asiento.getAttribute("style");
    var b = "background-color: rgb(245, 110, 110)"
    console.log(a);
    if(a.includes(b)){
        swal.fire({
            title: 'Error',
            text: 'Este asiento ya se encuentra ocupado',
            icon: 'error',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#48BB78'

        })
        asiento.style.backgroundColor = "rgb(245, 110, 110);"
        return;
    }
    else{
        Swal.fire({
            title: "Elegiste el asiento "+id,
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: 'Aceptar',
            denyButtonText: `Cancelar`,
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              Swal.fire('Asiento confirmado', '', 'success')
            } else if (result.isDenied) {
              Swal.fire('Elige otro asiento para seguir con el proceso', '', 'info')
            }
          })
    }

}