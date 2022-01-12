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
        <div class="container">
            <div class="row">
                <div>&nbsp</div>
                <h5 class="fw-bold fs-4" id="titleLoginPage">Selección de Asientos</h5>
                <p class="text-secondary" id="textLoginPage">Los asientos ocupados estan en rojo*</p>
            </div>
            <form method="post">
                <div class="row text-center mb-4 border py-4 mx-4" style="border-radius: 30px;  background-color: #C4C4C4;">
                    <div class="container">
                        <div class="row justify-content-md-center mb-4">
                            <div class="col-1 d-flex justify-content-center">
                                <p class="text-white"><b>A</b></p>
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <p class="text-white"><b>B</b></p>
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <p class="text-white"><b>C</b></p>
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <p class="text-white"><b>D</b></p>
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <p class="text-white"><b>E</b></p>
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <p class="text-white"><b>F</b></p>
                            </div>
                        </div>
                        <div class="row justify-content-md-center mb-4">
                            <div class="col-1 d-flex justify-content-center">
                                <input id="1" class="btn border btn-light btn-light" type="button" value="1" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;" onclick="verificarDisponibilidad(id)">
                            </div>
                            <div class="col-1 d-flex justify-content-center ocupado">
                                <input id="2" class="btn border btn-light btn-light" type="button" value="2" onclick="verificarDisponibilidad(id)" style="border-radius: 10px; background-color: rgb(245, 110, 110)">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="3" class="btn border btn-light btn-light" type="button" value="3" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="4" class="btn border btn-light " type="button" value="4" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="5" class="btn border btn-light " type="button" value="5" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="6" class="btn border btn-light ocupado" type="button" value="6" onclick="verificarDisponibilidad(id)" style="border-radius: 10px; background-color: rgb(245, 110, 110);">
                            </div>
                        </div>
                        <div class="row justify-content-md-center mb-4">
                            <div class="col-1 d-flex justify-content-center">
                                <input id="7" class="btn border btn-light " type="button" value="7" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="8" class="btn border btn-light " type="button" value="8" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="9" class="btn border btn-light" type="button" value="9" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="10" class="btn border btn-light" type="button" value="10" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="11" class="btn border btn-light" type="button" value="11" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="12" class="btn border btn-light" type="button" value="12" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                        </div>
                        <div class="row justify-content-md-center mb-4">
                            <div class="col-1 d-flex justify-content-center">
                                <input id="13" class="btn border btn-light" type="button" value="13" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="14" class="btn border btn-light" type="button" value="14" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="15" class="btn border btn-light" type="button" value="15" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="16" class="btn border btn-light" type="button" value="16" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="17" class="btn border btn-light" type="button" value="17" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="18" class="btn border btn-light" type="button" value="18" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                        </div>
                        <div class="row justify-content-md-center mb-4">
                            <div class="col-1 d-flex justify-content-center">
                                <input id="19" class="btn border btn-light ocupado" type="button" value="19" onclick="verificarDisponibilidad(id)" style="border-radius: 10px; background-color: rgb(245, 110, 110)">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="20" class="btn border btn-light" type="button" value="20" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="21" class="btn border btn-light" type="button" value="21" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="22" class="btn border btn-light ocupado" type="button" value="22" onclick="verificarDisponibilidad(id)" style="border-radius: 10px; background-color: rgb(245, 110, 110)">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="23" class="btn border btn-light" type="button" value="23" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="24" class="btn border btn-light ocupao" type="button" value="24" onclick="verificarDisponibilidad(id)" style="border-radius: 10px; background-color: rgb(245, 110, 110)">
                            </div>
                        </div>
                        <div class="row justify-content-md-center mb-4">
                            <div class="col-1 d-flex justify-content-center">
                                <input id="25" id="1" class="btn border btn-light" type="button" value="25" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="26" class="btn border btn-light" type="button" value="26" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="27" class="btn border btn-light" type="button" value="27" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="28" class="btn border btn-light" type="button" value="28" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="29" class="btn border btn-light ocupado" type="button" value="29" onclick="verificarDisponibilidad(id)" style="border-radius: 10px; background-color: rgb(245, 110, 110)">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="30" class="btn border btn-light" type="button" value="30" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                        </div>
                        <div class="row justify-content-md-center mb-4">
                            <div class="col-1 d-flex justify-content-center">
                                <input id="31" class="btn border btn-light" type="button" value="31" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="32" class="btn border btn-light" type="button" value="32" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="33" class="btn border btn-light" type="button" value="33" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="34" class="btn border btn-light" type="button" value="34" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="35" class="btn border btn-light" type="button" value="35" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="36" class="btn border btn-light" type="button" value="36" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                        </div>
                        <div class="row justify-content-md-center mb-4">
                            <div class="col-1 d-flex justify-content-center">
                                <input id="37" class="btn border btn-light" type="button" value="37" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="38" class="btn border btn-light" type="button" value="38" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="39" class="btn border btn-light" type="button" value="39" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-3 d-flex justify-content-center">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="40" class="btn border btn-light" type="button" value="40" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="41" class="btn border btn-light" type="button" value="41" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <input id="42" class="btn border btn-light" type="button" value="42" onclick="verificarDisponibilidad(id)" style="border-radius: 10px;">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--para recuperar el numero de asiento solo hace falta que se use php con post o get el name del input es asiento-->
            <div>
                <form method="post" action="informacion_resumen_compra.php" class="form">

                    <?php if (!empty($_POST['adicional'])) {
                        foreach ($_POST['adicional'] as $servicio) { ?>
                            <input value="<?php echo $servicio ?>" type="text" name="adicional[]" style="display: none;">
                    <?php }
                    } ?>
                    <input class="input-destino" value="<?php echo $_POST['destiny'] ?>" type="text" name="destiny" style="display: none;">
                    <input class="input-tipo" value="<?php echo $_POST['type'] ?>" type="text" name="type" style="display: none;">
                    <input class="input-precio" value="<?php echo $_POST['price'] ?>" type="text" name="price" style="display: none;">
                    <input class="input-fecha" value="<?php echo $_POST['date'] ?>" type="text" name="date" style="display: none;">
                    <input id="iti_escogido" value="<?php echo $_POST['itinerario'] ?>" type="text" name="itinerario" style="display: none;">
                    <input id="eq_escogido" value="<?php echo $_POST['equipaje'] ?>" type="text" name="equipaje" style="display: none;">
                    <input id="numAsiento" value="" type="text" name="asiento" style="display: none;">
                    <button type="submit" id="btnEnviar" style="border: 2px solid #CED6E0; font-size: 22px;
                    height: 50px; width: 30%;padding :5px 12px; transition: .3s ease all; border-radius: 5px;
                    color: #fff;background: #2364d2 ; box-shadow: 2px 2px 10px 0px rgba(0,85,212,0.4);
                    cursor: pointer;float: right;">CONFIRMAR</button>
                </form>
            </div>
            <div>&nbsp</div>
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
    <script src="js/asientos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11?v=<?php echo time(); ?>"></script>

</body>

</html>