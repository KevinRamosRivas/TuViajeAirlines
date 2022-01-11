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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
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


    <main>
        <div class="container-fluid py-3">
            <form action="/informacion_resumen_compra.html" method="post">
                <div id="hor1" class="card my-3 mx-auto btn btn-outline-secondary" style="width: 75%;">
                    <div class="d-flex justify-content-around" style="width: 100%;">
                        <p class="nav-text mt-3">Hora Salida</p>
                        <p class="nav-text mt-3">Duración</p>
                        <p class="nav-text mt-3">Desde</p>
                    </div>
                    <input id="iti1" name="horario1" type="button" style=" color:transparent; border:none; background: transparent; outline: 0;" />
                    <div class="d-flex justify-content-around" style="width: 100%;">
                        <p class="fuente">7:50 A.M</p>
                        <p class="fuente">3h 30m</p>
                        <p class="fuente">$125</p>
                    </div>
                </div>

                <div id="hor2" class="card my-3 mx-auto btn btn-outline-secondary" style="width: 75%;">
                    <div class="d-flex justify-content-around" style="width: 100%;">
                        <p class="nav-text mt-3">Hora Salida</p>
                        <p class="nav-text mt-3">Duración</p>
                        <p class="nav-text mt-3">Desde</p>
                    </div>
                    <input id="iti2" name="horario2" type="button" style="color:transparent; border:none; background: transparent; outline: 0;" />
                    <div class="d-flex justify-content-around" style="width: 100%;">
                        <p class="fuente">7:50 A.M</p>
                        <p class="fuente">3h 30m</p>
                        <p class="fuente">$125</p>
                    </div>
                </div>

                <div id="hor3" class="card my-3 mx-auto btn btn-outline-secondary" style="width: 75%;">
                    <div class="d-flex justify-content-around" style="width: 100%;">
                        <p class="nav-text mt-3">Hora Salida</p>
                        <p class="nav-text mt-3">Duración</p>
                        <p class="nav-text mt-3">Desde</p>
                    </div>
                    <input id="iti3" name="horario3" type="button" style="color:transparent; border:none; background: transparent; outline: 0;" />
                    <div class="d-flex justify-content-around" style="width: 100%;">
                        <p class="fuente">7:50 A.M</p>
                        <p class="fuente">3h 30m</p>
                        <p class="fuente">$125</p>
                    </div>
                </div>

                <div class=" mx-auto d-flex justify-content-around align-items-center flex-column flex-md-row mt-5" style="width: 75%;">
                    <div class="card border border-secondary border-2" style="width: 25%;">
                        <h4 class="fuente ms-3 my-3">Servicios Adicionales</h4>

                        <div class="ms-3 form-check">
                            <input class="form-check-input" name="equipaje" type="checkbox" value="" id="equipaje_box">
                            <label class="form-check-label fuente" for="equipaje_box">
                                Equipaje
                            </label>
                        </div>
                        <div class="ms-3 form-check">
                            <input class="form-check-input" name="alimento" type="checkbox" value="" id="alimento_box">
                            <label class="form-check-label fuente" for="alimento_box">
                                Alimento a bordo
                            </label>
                        </div>
                        <div class="ms-3 form-check">
                            <input class="form-check-input" name="cancel" type="checkbox" value="" id="viaje_box">
                            <label class="form-check-label fuente" for="viaje_box">
                                Cancelacion de Viaje
                            </label>
                        </div>
                    </div>

                    <button href="equipaje.html" type="submit" id="boton_envio" class="btn btn-colors fuente text-center fs-2 disabled" style="color:#fff; background: #516ED3; border-radius: 40px; height: 60px; width: 25%;">Continua -></button>
                </div>
            </form>
        </div>
    </main>

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

    <script src="js/itinerario.js"></script>
</body>

</html>