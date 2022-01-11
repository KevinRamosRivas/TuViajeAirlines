function verificarDisponibilidad(id){
    const asiento = document.getElementById(id);
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
            showCancelButton: true,
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