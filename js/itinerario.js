//Para los itinerarios

//Inputs en los itinerarios
const input1 = document.getElementById("iti1");
const input2 = document.getElementById("iti2");
const input3 = document.getElementById("iti3");

//Cuadros de itinerarios
const it1 = document.getElementById('hor1');
const it2 = document.getElementById('hor2');
const it3 = document.getElementById('hor3');

//Boton envio
const btn1 = document.getElementById('boton_envio');

//Input escogido
var hor = document.getElementById("iti_escogido");

//Formulario
const form = document.getElementById('form_horario');

/*
btn1.addEventListener('click', function (e) {
    e.preventDefault();
    form.submit();
    window.location.href = "equipaje.php";
})
*/

input1.addEventListener("click", function () {
    it1.classList.add('active');
    it2.classList.remove('active');
    it3.classList.remove('active');

    btn1.classList.remove('disabled');

    hor.setAttribute('value', input1.value);

})

input2.addEventListener("click", function () {
    it2.classList.add('active');
    it3.classList.remove('active');
    it1.classList.remove('active');

    btn1.classList.remove('disabled');

    hor.setAttribute('value', input2.value);
})

input3.addEventListener("click", function () {
    it3.classList.add('active');
    it2.classList.remove('active');
    it1.classList.remove('active');

    btn1.classList.remove('disabled');


    hor.setAttribute('value', input3.value);
})
