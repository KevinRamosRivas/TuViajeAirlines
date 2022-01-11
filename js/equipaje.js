//Para los equipajes
const equip1 = document.getElementById('eq1');
const equip2 = document.getElementById('eq2');
const equip3 = document.getElementById('eq3');


//Para los botones de equipaje
const btn_equip1 = document.getElementById('eqc1');
const btn_equip2 = document.getElementById('eqc2');
const btn_equip3 = document.getElementById('eqc3');

const btn2 = document.getElementById('boton_envio2');

equip1.addEventListener('click', function () {
    btn_equip1.classList.add('active');
    btn_equip2.classList.remove('active');
    btn_equip3.classList.remove('active');

    btn2.classList.remove('disabled');
})

equip2.addEventListener('click', function () {
    btn_equip2.classList.add('active');
    btn_equip1.classList.remove('active');
    btn_equip3.classList.remove('active');

    btn2.classList.remove('disabled');
})

equip3.addEventListener('click', function () {
    btn_equip3.classList.add('active');
    btn_equip1.classList.remove('active');
    btn_equip2.classList.remove('active');

    btn2.classList.remove('disabled');
})