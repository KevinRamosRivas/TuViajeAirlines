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

input1.addEventListener("click", function () {
    it1.classList.add('active');
    it2.classList.remove('active');
    it3.classList.remove('active');

    btn1.classList.remove('disabled');

})

input2.addEventListener("click", function () {
    it2.classList.add('active');
    it3.classList.remove('active');
    it1.classList.remove('active');

    btn1.classList.remove('disabled');
})

input3.addEventListener("click", function () {
    it3.classList.add('active');
    it2.classList.remove('active');
    it1.classList.remove('active');

    btn1.classList.remove('disabled');
})
