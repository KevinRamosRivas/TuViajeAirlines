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
<header class="header p-t-0" style="background-color: rgb(255, 196, 0);">
      <div class="container-fluid px-5">
          <div class="navbar flex-column flex-md-row">
              <a class="navbar-brand" href="index.html">
                  <img src="img/LogoTuViaje.png" alt="LogoTuViaje" width="80" height="80">
              </a>

              <div class="navbar-nav  flex-md-row">
                  <a class="nav-link nav-text me-3" href="#">OFERTAS</a>
                  <a class="nav-link nav-text me-3" href="#">DESTINOS</a>
                  <a class="navbar-brand">
                    <div>
                      <img src="img/foto_perfil.PNG" alt="foto_perfil" width="50" height="50"  style="border-radius: 50%;" alt=" ">
                    </div>
                  </a>
                  <select class="form-control search-slt" id="exampleFormControlSelect1" style="text-align: center; font-size: 18px; font-weight: 600;" onchange="cerrarSesion(this)">
                    <option disabled selected style="text-align: center;">Kevin Ramos</option>
                    <option value="1"><a class="nav-link nav-text" href="index.html">Cerrar Sesión</a></option>
                </select> 
              </div>
          </div>
      </div>    
    </header>


    <main>
        <div class="container-fluid py-3">
            <form id="form_horario" action="equipaje.php" method="post">
                <div id="hor1" class="card my-3 mx-auto btn btn-outline-secondary" style="width: 75%;">
                    <div class="d-flex justify-content-around" style="width: 100%;">
                        <p class="nav-text mt-3">Hora Salida</p>
                        <p class="nav-text mt-3">Duración</p>
                        <p class="nav-text mt-3">Desde</p>
                    </div>
                    <input id="iti1" name="horario" value="h1" type="button" style=" color:transparent; border:none; background: transparent; outline: 0;" />
                    <div class="d-flex justify-content-around" style="width: 100%;">
                        <p class="fuente">7:50 A.M</p>
                        <p class="fuente">3h 30m</p>
                        <p class="fuente">S/<?php echo $_POST['price'] ?></p>
                    </div>
                </div>

                <div id="hor2" class="card my-3 mx-auto btn btn-outline-secondary" style="width: 75%;">
                    <div class="d-flex justify-content-around" style="width: 100%;">
                        <p class="nav-text mt-3">Hora Salida</p>
                        <p class="nav-text mt-3">Duración</p>
                        <p class="nav-text mt-3">Desde</p>
                    </div>
                    <input id="iti2" name="horario" value="h2" type="button" style="color:transparent; border:none; background: transparent; outline: 0;" />
                    <div class="d-flex justify-content-around" style="width: 100%;">
                        <p class="fuente">12:30 P.M</p>
                        <p class="fuente">3h 30m</p>
                        <p class="fuente">S/<?php echo $_POST['price'] ?></p>
                    </div>
                </div>

                <div id="hor3" class="card my-3 mx-auto btn btn-outline-secondary" style="width: 75%;">
                    <div class="d-flex justify-content-around" style="width: 100%;">
                        <p class="nav-text mt-3">Hora Salida</p>
                        <p class="nav-text mt-3">Duración</p>
                        <p class="nav-text mt-3">Desde</p>
                    </div>
                    <input id="iti3" name="horario" value="h3" type="button" style="color:transparent; border:none; background: transparent; outline: 0;" />
                    <div class="d-flex justify-content-around" style="width: 100%;">
                        <p class="fuente">6:00 P.M</p>
                        <p class="fuente">3h 30m</p>
                        <p class="fuente">S/<?php echo $_POST['price'] ?></p>
                    </div>
                </div>

                <div class=" mx-auto d-flex justify-content-around align-items-center flex-column flex-md-row mt-5" style="width: 75%;">
                    <div class="card border border-secondary border-2" style="width: 25%;">
                        <h4 class="fuente ms-3 my-3">Servicios Adicionales</h4>

                        <div class="ms-3 form-check">
                            <input class="form-check-input" name="adicional[]" type="checkbox" value="Equipaje" id="equipaje_box">
                            <label class="form-check-label fuente" for="equipaje_box">
                                Equipaje
                            </label>
                        </div>
                        <div class="ms-3 form-check">
                            <input class="form-check-input" name="adicional[]" type="checkbox" value="Alimento a Bordo" id="alimento_box">
                            <label class="form-check-label fuente" for="alimento_box">
                                Alimento a bordo
                            </label>
                        </div>
                        <div class="ms-3 form-check">
                            <input class="form-check-input" name="adicional[]" type="checkbox" value="Cancelacion de Viaje" id="viaje_box">
                            <label class="form-check-label fuente" for="viaje_box">
                                Cancelacion de Viaje
                            </label>
                        </div>
                    </div>

                    <input class="input-destino" value="<?php echo $_POST['destiny'] ?>" type="text" name="destiny" style="display: none;">
                    <input class="input-tipo" value="<?php echo $_POST['type'] ?>" type="text" name="type" style="display: none;">
                    <input class="input-precio" value="<?php echo $_POST['price'] ?>" type="text" name="price" style="display: none;">
                    <input class="input-fecha" value="<?php echo $_POST['date'] ?>" type="text" name="date" style="display: none;">
                    <input id="iti_escogido" value="" type="text" name="itinerario" style="display: none;">
                    <button type="submit" id="boton_envio" class="btn btn-colors fuente text-center fs-2 disabled" style="color:#fff; background: #516ED3; border-radius: 40px; height: 60px; width: 25%;">Continua -></button>
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