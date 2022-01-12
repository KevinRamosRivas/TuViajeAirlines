//Para los equipajes
const equip1 = document.getElementById('eq1');
const equip2 = document.getElementById('eq2');
const equip3 = document.getElementById('eq3');


//Para los botones de equipaje
const btn_equip1 = document.getElementById('eqc1');
const btn_equip2 = document.getElementById('eqc2');
const btn_equip3 = document.getElementById('eqc3');

const btn2 = document.getElementById('boton_envio2');

const form = document.getElementById('form_equipaje');

var eqp = document.getElementById('eq_escogido');

/*
btn2.addEventListener('click', function (e) {
    e.preventDefault();
    form.submit();
    window.location.href = "seleccion_asientos.php";
})
*/

equip1.addEventListener('click', function () {
    btn_equip1.classList.add('active');
    btn_equip2.classList.remove('active');
    btn_equip3.classList.remove('active');

    btn2.classList.remove('disabled');

    eqp.setAttribute('value', equip1.value);

})

equip2.addEventListener('click', function () {
    btn_equip2.classList.add('active');
    btn_equip1.classList.remove('active');
    btn_equip3.classList.remove('active');

    btn2.classList.remove('disabled');

    eqp.setAttribute('value', equip2.value);
})

equip3.addEventListener('click', function () {
    btn_equip3.classList.add('active');
    btn_equip1.classList.remove('active');
    btn_equip2.classList.remove('active');

    btn2.classList.remove('disabled');

    eqp.setAttribute('value', equip3.value);
})