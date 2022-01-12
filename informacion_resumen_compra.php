<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Tarjeta de Crédito Dinámico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">



    <link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/confirmarcion_pago.css">
    <link rel="stylesheet" href="css/main.css">


</head>

<body>
    <!--INICIO DEL HEADER-->
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
    <!--FIN DEL HEADER-->
    <!--INICIO DEL CODIGO DE LAS TARJETAS-->
    <div class="container">
        <div class="mt-5 mb-5">
            <p class="fw-bold fs-3">Informacion del cliente</p>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <form id="datosCliente">
                    <div class="mb-3">
                        <label for="nombresCliente" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="nombresCliente">
                    </div>
                    <div class="mb-3">
                        <label for="apellidosCliente" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellidosCliente">
                    </div>
                    <div class="mb-3">
                        <label for="dateNacimiento" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="dateNacimiento">
                    </div>
                    <div class="mb-3">
                        <label for="tipoDocumento" class="form-label">Tipo de documento de identidad</label>
                        <select class="form-select mb-3" aria-label="Default select example" id="tipoDocumento" onchange="cambiar(value)">
                            <option selected>Seleccione una de las siguientes opciones</option>
                            <option value="1">Pasaporte</option>
                            <option value="2">DNI</option>
                        </select>
                    </div>
                    <div class="mb-3" id="nIden">
                        <label for="numIdentidad" class="form-label">Numero de documento de identidad</label>
                        <input type="text" class="form-control" id="numIdentidad">
                    </div>
                    <div class="mb-3">
                        <label for="emailCliente" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" id="emailCliente">
                    </div>
                    <div class="mb-3">
                        <label for="generoCliente" class="form-label">Genero</label>
                        <select class="form-select mb-3" aria-label="Default select example" id="generoCliente">
                            <option selected>Seleccione una de las siguientes opciones</option>
                            <option value="1">Femenino</option>
                            <option value="2">Masculino</option>
                            <option value="3">Prefiero no decirlo</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="telCliente" class="form-label">Telefono celular</label>
                        <input type="tel" class="form-control" id="telCliente">
                    </div>
                </form>
            </div>
            <div class="col-md-12 col-lg-6">
                <div>
                    <p class="fw-bold fs-3">Resumen de compra</p>
                </div>
                <div class="border border-dark h-auto mb-4 p-4" style="border-radius: 30px;">

                    <p class="nav-text">Destino:</p>
                    <p class="text-center"><?php echo $_POST['destiny'] ?> </p>
                    <p class="nav-text">Hora de Salida:</p>
                    <?php switch ($_POST['itinerario']) {
                        case "h1":
                            print "<p class=\"text-center\">7:50 a.m</p>";
                            break;

                        case "h2":
                            print "<p class=\"text-center\">12:30 p.m</p>";
                            break;

                        case "h3":
                            print "<p class=\"text-center\">6:00 p.m</p>";
                            break;
                    };
                    ?>
                    <p class="nav-text">Fecha de salida:</p>
                    <p class="text-center"><?php echo $_POST['date'] ?> </p>
                    <p class="nav-text">Tipo de vuelo:</p>
                    <p class="text-center"><?php echo $_POST['type'] ?> </p>
                    <p class="text-center">S/<?php echo $_POST['price'] ?> </p>
                    <p class="nav-text">N° de asiento:</p>
                    <p class="text-center"><?php echo $_POST['asiento'] ?> </p>
                    <p class="nav-text">Equipaje:</p>
                    <?php
                    $precioEquip = 0;

                    switch ($_POST['equipaje']) {
                        case "e1":
                            print "<p class=\"text-center\" >Basico</p>";
                            print "<p class=\"text-center\">S/0</p>";
                            $precioEquip = 0;
                            break;

                        case "e2":
                            print "<p class=\"text-center\">Ligero</p>";
                            print "<p class=\"text-center\">S/80</p>";
                            $precioEquip = 80;
                            break;

                        case "e3":
                            print "<p class=\"text-center\">Plus</p>";
                            print "<p class=\"text-center\">S/160</p>";
                            $precioEquip = 160;
                            break;
                    };
                    ?>
                    <?php
                    $precioAdicional = 0;
                    if (!empty($_POST['adicional'])) { ?>
                        <p class="nav-text">Servicio Adicional:</p>
                        <?php foreach ($_POST['adicional'] as $servicio) {
                            print "<p class=\"text-center\">" . $servicio . "</p>";
                            print "<p class=\"text-center\">S/40</p>";

                            $precioAdicional += 40;
                        } ?>
                    <?php }
                    $Total = (int)$_POST['price'] + $precioEquip + $precioAdicional;
                    ?>
                    <p class="nav-text">TOTAL:</p>
                    <p class="text-center">S/<?php echo $Total ?> </p>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col d-flex justify-content-end">
                <button id="btnCliente" class="btn btn-primary btn-lg" type="button" form="datosCliente">Continuar -> </button>
            </div>
        </div>
    </div>
    <!--FIN DEL CODIGO DE LAS TARJETAS-->
    <!-- FOOTER -->
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
    <!-- FIN DEL FOOTER -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="js/validarResumen.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11?v=<?php echo time(); ?>"></script>
</body>

</html>