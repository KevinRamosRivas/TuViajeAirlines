<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuViajeAirlines</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/busqueda.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />

</head>

<body>
    <header class="header">
        <div class="container-fluid px-5">
            <div class="navbar flex-column flex-md-row">
                <a class="navbar-brand" href="index.html">
                    <img src="img/LogoTuViaje.png" alt="LogoTuViaje" width="80" height="80">
                </a>

                <div class="navbar-nav  flex-md-row">
                    <a class="nav-link nav-text me-3" href="#">OFERTAS</a>
                    <a class="nav-link nav-text me-3" href="#">DESTINOS</a>
                    <a class="nav-link nav-text" href="#">INICIAR SESION</a>
                </div>

            </div>
        </div>
    </header>

    <section class="eleccion-vuelo">

        <div class="contenedor">

            <div class="filtro">

                <form id="filtrodetallado" class="form">

                    <p>
                        <strong><label for="destino">Destinos:</label></strong><br>
                        <input type="radio" name="destino" id="destino1" value="Arequipa"> Arequipa <br>
                        <input type="radio" name="destino" id="destino2" value="Ayacucho"> Ayacucho <br>
                        <input type="radio" name="destino" id="destino3" value="Cajamarca"> Cajamarca <br>
                        <input type="radio" name="destino" id="destino4" value="Chiclayo"> Chiclayo <br>
                        <input type="radio" name="destino" id="destino5" value="Cuzco"> Cuzco <br>
                        <input type="radio" name="destino" id="destino6" value="Ilo"> Ilo <br>
                        <input type="radio" name="destino" id="destino7" value="Iquitos"> Iquitos <br>
                        <input type="radio" name="destino" id="destino8" value="Juliaca"> Juliaca <br>
                        <input type="radio" name="destino" id="destino9" value="Lima"> Lima <br>
                        <input type="radio" name="destino" id="destino10" value="Piura"> Piura <br>
                        <input type="radio" name="destino" id="destino11" value="Pucallpa"> Pucallpa <br>
                        <input type="radio" name="destino" id="destino12" value="Puerto Maldonado"> Puerto Maldonado <br>
                        <input type="radio" name="destino" id="destino13" value="Rioja"> Rioja <br>
                        <input type="radio" name="destino" id="destino14" value="Tacna"> Tacna <br>
                        <input type="radio" name="destino" id="destino15" value="Talara"> Talara <br>
                        <input type="radio" name="destino" id="destino16" value="Tarapoto"> Tarapoto <br>
                        <input type="radio" name="destino" id="destino17" value="Trujillo"> Trujillo <br>
                        <input type="radio" name="destino" id="destino18" value="Tumbes"> Tumbes <br>
                        <input type="radio" name="destino" id="destino19" value="Yurimaguas"> Yurimaguas <br>
                    </p>

                    <p>
                        <strong><label for="cabina">Cabina:</label></strong><br />
                        <input type="radio" name="cabina" id="cabina" value="Turista"> Turista <br>
                        <input type="radio" name="cabina" id="cabina" value="Economico"> Económico <br>
                        <input type="radio" name="cabina" id="cabina" value="Primera clase"> Primera clase <br>
                    </p>

                    <strong>
                        <p>Precio:</p>
                    </strong>
                    <p>
                        <label for="desde">Desde</label>
                        <input type="number" name="desde" id="desde">
                    </p>

                    <p>
                        <label for="hasta">Hasta</label>
                        <input type="number" name="hasta" id="hasta">
                    </p>

                    <p>
                        <strong><label for="mes">Mes:</label></strong><br>
                        <input type="month" name="mes" id="mes">
                    </p>

                    <p>
                        <strong><label for="tipo">Tipo de vuelo:</label></strong><br />
                        <input type="radio" name="tipo"> Solo ida <br>
                        <input type="radio" name="tipo"> Ida y vuelta <br><br>
                    </p>

                    <p>
                        <input type="button" class="boton btn btn-primary w-75" value="Filtrar" onclick="obtenerdatos()">
                    </p>



                </form>

                <script>
                    function obtenerdatos() {
                        var dest = document.getElementsByName('destino');
                        for (i = 0; i < dest.length; i++) {
                            if (dest[i].checked) {
                                var memory = dest[i].value;
                            }
                        }

                        document.getElementById("destinoelegido1").innerHTML = memory;
                        document.getElementById("destinoelegido2").innerHTML = memory;
                        document.getElementById("destinoelegido3").innerHTML = memory;
                        document.getElementById("destinoelegido4").innerHTML = memory;
                        document.getElementById("destinoelegido5").innerHTML = memory;
                        document.getElementById("destinoelegido6").innerHTML = memory;

                        var p1 = document.getElementById('desde');
                        var p2 = document.getElementById('hasta');
                        document.getElementById("precioelegido1").innerHTML = "S/" + p1.value + " - " + "S/" + p2.value;
                        document.getElementById("precioelegido2").innerHTML = "S/" + p1.value + " - " + "S/" + p2.value;
                        document.getElementById("precioelegido3").innerHTML = "S/" + p1.value + " - " + "S/" + p2.value;
                        document.getElementById("precioelegido4").innerHTML = "S/" + p1.value + " - " + "S/" + p2.value;
                        document.getElementById("precioelegido5").innerHTML = "S/" + p1.value + " - " + "S/" + p2.value;
                        document.getElementById("precioelegido6").innerHTML = "S/" + p1.value + " - " + "S/" + p2.value;

                        var m1 = document.getElementById('mes');
                        document.getElementById("meselegido1").innerHTML = "Fecha de salida: " + m1.value;
                        document.getElementById("meselegido2").innerHTML = "Fecha de salida: " + m1.value;
                        document.getElementById("meselegido3").innerHTML = "Fecha de salida: " + m1.value;
                        document.getElementById("meselegido4").innerHTML = "Fecha de salida: " + m1.value;
                        document.getElementById("meselegido5").innerHTML = "Fecha de salida: " + m1.value;
                        document.getElementById("meselegido6").innerHTML = "Fecha de salida: " + m1.value;


                        
                        var inputDestino = document.getElementsByClassName('input-destino');
                        for (var i = 0; i < inputDestino.length; i++) {
                            inputDestino[i].setAttribute('value', memory);

                        }

                        var inputPrecio = document.getElementsByClassName('input-precio');
                        var precioProm = (parseInt(p1.value, 10) + parseInt(p2.value, 10)) / 2;
                        for (var i = 0; i < inputPrecio.length; i++) {
                            inputPrecio[i].setAttribute('value', precioProm);
                        }

                        var inputFecha = document.getElementsByClassName('input-fecha');
                        for (var i = 0; i < inputFecha.length; i++) {
                            inputFecha[i].setAttribute('value', m1.value);
                        }

                        var t1 = document.getElementsByName('cabina');
                        for (i = 0; i < t1.length; i++) {
                            if (t1[i].checked) {
                                var typeMem = t1[i].value;
                            }
                        }

                        var inputTipo = document.getElementsByClassName('input-tipo');
                        for (var i = 0; i < inputTipo.length; i++) {
                            inputTipo[i].setAttribute('value', typeMem);
                        }

                        var img = document.getElementsByClassName("img");
                                for(var i = 0; i < img.length; i++) {
                                    switch(memory){
                                        case 'Lima':
                                            img[i].setAttribute('src','img/lima.jpg');
                                            break;
                                        case 'Cuzco':
                                            img[i].setAttribute('src','img/cuzco.jpg');
                                            break;
                                        case 'Arequipa':
                                            img[i].setAttribute('src','img/arequipa.jpg');
                                            break;
                                        default:
                                            img[i].setAttribute('src','img/puno.jpg');
                                            break;
                                    }     
                                }


                    }
                </script>

            </div>

            <div class="resultados">

                <strong>
                    <p>Mostrando resultados:</p>
                </strong>

                <form action="itinerario.php" method="post">
                    <div class="opcion">

                        <div class="imagen-opc">

                            <img class="img" src="img/arequipa.jpg" alt="imagen-opc">

                        </div>

                        <div class="contenido">
                            <strong>
                                <p id="destinoelegido1">Destino</p>
                            </strong>
                            <p id="precioelegido1">Precio del viaje</p>
                            <p id="meselegido1">Fecha de partida</p>
                            <p>Asientos disponibles: 24</p>

                        </div>

                        <div class="boton-continuar">
                            <input class="input-destino" value="" type="text" name="destiny" style="display: none;">
                            <input class="input-tipo" value="" type="text" name="type" style="display: none;">
                            <input class="input-precio" value="" type="text" name="price" style="display: none;">
                            <input class="input-fecha" value="" type="text" name="date" style="display: none;">
                            <input type="submit" class="boton btn btn-primary w-75" value="Comprar">
                        </div>

                    </div>

                    <br>

                    <div class="opcion">

                        <div class="imagen-opc">

                            <img class="img" src="img/arequipa.jpg" alt="imagen-opc">

                        </div>

                        <div class="contenido">
                            <strong>
                                <p id="destinoelegido2">Destino</p>
                            </strong>
                            <p id="precioelegido2">Precio del viaje</p>
                            <p id="meselegido2">Fecha de partida</p>
                            <p>Asientos disponibles: 24</p>

                        </div>

                        <div class="boton-continuar">
                            <input class="input-destino" value="" type="text" name="destiny" style="display: none;">
                            <input class="input-tipo" value="" type="text" name="type" style="display: none;">
                            <input class="input-precio" value="" type="text" name="price" style="display: none;">
                            <input class="input-fecha" value="" type="text" name="date" style="display: none;">
                            <input type="submit" class="boton btn btn-primary w-75" value="Comprar">
                        </div>

                    </div>

                    <br>

                    <div class="opcion">

                        <div class="imagen-opc">

                            <img class="img" src="img/arequipa.jpg" alt="imagen-opc">

                        </div>

                        <div class="contenido">
                            <strong>
                                <p id="destinoelegido3">Destino</p>
                            </strong>
                            <p id="precioelegido3">Precio del viaje</p>
                            <p id="meselegido3">Fecha de partida</p>
                            <p>Asientos disponibles: 24</p>

                        </div>

                        <div class="boton-continuar">
                            <input class="input-destino" value="" type="text" name="destiny" style="display: none;">
                            <input class="input-tipo" value="" type="text" name="type" style="display: none;">
                            <input class="input-precio" value="" type="text" name="price" style="display: none;">
                            <input class="input-fecha" value="" type="text" name="date" style="display: none;">
                            <input type="submit" class="boton btn btn-primary w-75" value="Comprar">
                        </div>

                    </div>

                    <br>

                    <div class="opcion">

                        <div class="imagen-opc">

                            <img class="img" src="img/arequipa.jpg" alt="imagen-opc">

                        </div>

                        <div class="contenido">
                            <strong>
                                <p id="destinoelegido4">Destino</p>
                            </strong>
                            <p id="precioelegido4">Precio del viaje</p>
                            <p id="meselegido4">Fecha de partida</p>
                            <p>Asientos disponibles: 24</p>

                        </div>

                        <div class="boton-continuar">
                            <input class="input-destino" value="" type="text" name="destiny" style="display: none;">
                            <input class="input-tipo" value="" type="text" name="type" style="display: none;">
                            <input class="input-precio" value="" type="text" name="price" style="display: none;">
                            <input class="input-fecha" value="" type="text" name="date" style="display: none;">
                            <input type="submit" class="boton btn btn-primary w-75" value="Comprar">
                        </div>

                    </div>

                    <br>

                    <div class="opcion">

                        <div class="imagen-opc">

                            <img class="img" src="img/arequipa.jpg" alt="imagen-opc">

                        </div>

                        <div class="contenido">
                            <strong>
                                <p id="destinoelegido5">Destino</p>
                            </strong>
                            <p id="precioelegido5">Precio del viaje</p>
                            <p id="meselegido5">Fecha de partida</p>
                            <p>Asientos disponibles: 24</p>

                        </div>

                        <div class="boton-continuar">
                            <input class="input-destino" value="" type="text" name="destiny" style="display: none;">
                            <input class="input-tipo" value="" type="text" name="type" style="display: none;">
                            <input class="input-precio" value="" type="text" name="price" style="display: none;">
                            <input class="input-fecha" value="" type="text" name="date" style="display: none;">
                            <input type="submit" class="boton btn btn-primary w-75" value="Comprar">
                        </div>

                    </div>

                    <br>

                    <div class="opcion">

                        <div class="imagen-opc">

                            <img class="img" src="img/arequipa.jpg" alt="imagen-opc">

                        </div>

                        <div class="contenido">
                            <strong>
                                <p id="destinoelegido6">Destino</p>
                            </strong>
                            <p id="precioelegido6">Precio del viaje</p>
                            <p id="meselegido6">Fecha de partida</p>
                            <p>Asientos disponibles: 24</p>

                        </div>

                        <div class="boton-continuar">
                            <input class="input-destino" value="" type="text" name="destiny" style="display: none;">
                            <input class="input-tipo" value="" type="text" name="type" style="display: none;">
                            <input class="input-precio" value="" type="text" name="price" style="display: none;">
                            <input class="input-fecha" value="" type="text" name="date" style="display: none;">
                            <input type="submit" class="boton btn btn-primary w-75" value="Comprar">
                        </div>

                    </div>

                    <br>
                </form>

            </div>

        </div>

    </section>

    <footer class="footer mt-5">
        <div class="container-fluid">
            <div class="navbar flex-column flex-md-row ">
                <div class="ms-md-5 mx-auto">
                    <a class="navbar-brand  d-flex justify-content-center" href="#">
                        <img src="img/LogoTuViaje.png" alt="LogoTuViaje" width="80" height="80">
                    </a>

                    <div class="navbar-nav">
                        <a class="nav-link nav-text" href="#">Contacto</a>
                        <a class="nav-link nav-text" href="#">Sobre nosotros</a>
                        <a class="nav-link nav-text" href="#">Terminos y condiciones</a>
                        <a class="nav-link nav-text" href="#">Libro de Reclamaciones</a>
                    </div>
                </div>

                <div class="navbar-nav mx-auto me-md-5 ">
                    <a class="nav-link nav-text  justify-content-md-center" href="#">Crear tu cuenta</a>
                    <a class="nav-link nav-text  justify-content-md-center" href="#">Centro de Ayuda</a>
                </div>

            </div>
        </div>
    </footer>
</body>

</html>