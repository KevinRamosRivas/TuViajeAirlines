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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                <div id="eqc1" class="card my-3 mx-auto btn btn-outline-secondary" style="width: 75%;">
                    <div class="d-flex justify-content-around align-items-center" style="width: 100%;">
                        <p class="fuente mt-4 fs-5">Basico</p>
                        <ul class="mt-4 fs-5">
                            <li>
                                Articulos Personales
                                    <p class="text-center">
                                        ( < 10kg)
                                    </p>
                            </li>
                        </ul>
                        <p class="fuente mt-4 fs-5">Gratis</p>
                    </div>
                    <input id="eq1" name="basico" type="button"
                        style=" color:transparent; border:none; background: transparent; outline: 0;" />
                </div>

                <div id="eqc2" class="card my-3 mx-auto btn btn-outline-secondary" style="width: 75%;">
                    <div class="d-flex justify-content-around align-items-center" style="width: 100%;">
                        <p class="fuente mt-4 fs-5">Ligero</p>
                        <ul class="mt-4 fs-5">
                            <li>
                                Articulos Personales
                            </li>
                            <li>
                                Equipaje en la bodega
                                <p class="text-center">
                                    (10 - 23Kg) </p>
                            </li>
                        </ul>
                        <p class="fuente mt-4 fs-5">20$ o S/.80</p>
                    </div>
                    <input id="eq2" name="ligero" type="button"
                        style=" color:transparent; border:none; background: transparent; outline: 0;" />
                </div>

                <div id="eqc3" class="card my-3 mx-auto btn btn-outline-secondary" style="width: 75%;">
                    <div class="d-flex justify-content-around align-items-center" style="width: 100%;">
                        <p class="fuente mt-4 fs-5">Plus</p>
                        <ul class="mt-4 fs-5">
                            <li>
                                Articulos Personales
                            </li>
                            <li>
                                Equipaje en la bodega
                            </li>
                            <li>
                                Equipaje de mano
                                <p class="text-center">
                                    (30kg) </p>
                            </li>
                        </ul>
                        <p class="fuente mt-4 fs-5">40$ o S/.160</p>
                    </div>
                    <input id="eq3" name="plus" type="button"
                        style=" color:transparent; border:none; background: transparent; outline: 0;" />

                </div>



            


                <div class=" mx-auto d-flex justify-content-end align-items-center flex-column flex-md-row mt-5"
                    style="width: 75%;">

                    <button  id="boton_envio2" type="submit" class="btn btn-colors fuente text-center fs-2 disabled"
                        style="color:#fff; background: #516ED3; border-radius: 40px; height: 60px; width: 25%;">Continua
                        -></button>
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

    <script src="js/equipaje.js"></script>
</body>

</html>