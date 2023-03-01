<?php
   session_start();
   if(!isset($_SESSION["usuario"])) $_SESSION["usuario"] = "invitado";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="barNav fixed-top" id="navBar">
            <div class="container">
                <div class="contenedor navbar navbar-expand-lg navbar-dark ">
                    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand logo" href="index.php">
                        <img src="img/gilmar-logo.png" height="40px">
                    </a>
                    <div class="collapse navbar-collapse nav" id="navbarNav">
                        <ul class="navbar-nav">
                            <a href="php/comprar.php"><li class="nav-item">Comprar</li></a>
                            <a href="php/vender.php"><li class="nav-item">Vender</li></a>
                            <a href=""><li class="nav-link disabled">Alquilar</li></a>
                            <a href=""><li class="nav-link disabled">Nosotros</li></a>
                            <a href=""><li class="nav-link disabled">Servicios</li></a>
                            <a href=""><li class="nav-link disabled">Blog</li></a>
                            <a href=""><li class="nav-link disabled">Contacto</li></a>
                        </ul>
                    </div>
                    <div class="botonesResponsivo">
                        <?php
                            
                            if($_SESSION["usuario"] == 'invitado'){
                                echo '
                                    <button class="button" data-bs-toggle="modal" data-bs-target="#IniciarSesion">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                        </svg>
                                    </button>
                                    <button class="button" data-bs-toggle="modal" data-bs-target="#Registro">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                                            <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                                        </svg>
                                    </button>
                                ';
                            }
                            else
                            echo '
                                <div class="dropdown">
                                    <button class="button" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        '.$_SESSION["usuario"].'
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="php/gestion.php">Gestión</a></li>
                                        <li><a class="dropdown-item" href="php/cerrarSesion.php">
                                            <button type="button" class="btn btn-danger">CERRAR SESIÓN</button>
                                        </a></li>
                                    </ul>
                                </div>
                            ';
                        ?>
                    </div>
                </div>
                <div class="botones">
                    <?php
                        if($_SESSION["usuario"] == 'invitado'){
                            echo '
                            <button class="button1" data-bs-toggle="modal" data-bs-target="#IniciarSesion">Acceso</button>
                            <button class="button2" data-bs-toggle="modal" data-bs-target="#Registro">Registro</button>
                            ';

                        }
                        else{
                            echo '
                                <div class="dropdown">
                                    <button class="button1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        '.$_SESSION["usuario"].'
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="php/gestion.php">Gestión</a></li>
                                        <li><a class="dropdown-item" href="php/cerrarSesion.php">
                                            <button type="button" class="btn btn-danger">CERRAR SESIÓN</button>
                                        </a></li>
                                    </ul>
                                </div>
                            ';
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="media">
            <div class="banner">
                <div class="contenedorBanner">
                    <h1>De toda la vida, <span id="variable"></span></h1>
                    <div class="d-flex">
                        <form action="php/filtrar.php" method="post" class="d-flex">
                            <select class="form-select" name="categoria">
                                <option selected>Viviendas</option>
                                <option value="Pisos">Pisos</option>
                                <option value="ObraNueva">Obra Nueva</option>
                                <option value="Chalets">Chalets</option>
                                <option value="Locales">Locales</option>
                                <option value="Oficinas">Oficinas</option>
                                <option value="Naves">Naves</option>
                                <option value="Edificios">Edificios</option>
                                <option value="Solares">Solares</option>
                                <option value="Garajes">Garajes</option>
                                <option value="FincasRusticas">Fincas Rústicas</option>
                                <option value="Unicos">Únicos</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Continuar</button>
                        </form>
                    </div>
                </div>
                <div class="contenedorBajar">
                    <a href="#section1" ><button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                          </svg>
                    </button></a>
                </div>
            </div>
        </div>
        <div class="modal iniciarSesion" tabindex="-1" id="IniciarSesion">
            <div class="modal-dialog modal-dialog-centered ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Iniciar Sesión</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="php/login.php" name="signup-form">
                        <div class="mb-3">
                          <label for="InputUser" class="form-label">Usuario</label>
                          <input type="email" class="form-control" name="user" required>
                        </div>
                        <div class="mb-3">
                          <label for="InputPassword" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Continuar</button>
                    </form>
                </div>
              </div>
            </div>
        </div>
        <div class="modal Registro" tabindex="-1" id="Registro">
            <div class="modal-dialog modal-dialog-centered ">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">REGISTRO</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="php/registro.php" name="signup-form">
                        <div class="mb-3">
                          <label for="InputUser" class="form-label">Usuario</label>
                          <input type="email" class="form-control" name="user" placeholder="E-mail" required>
                        </div>
                        <div class="mb-3">
                          <label for="InputPassword" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                        </div>
                        <div class="mb-3">
                          <label for="InputTelefono" class="form-label">Teléfono</label>
                          <input type="tel" class="form-control" name="telefono" placeholder="Teléfono" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Continuar</button>
                    </form>
                </div>
              </div>
            </div>
        </div>
          
          
    </header>
    <section id="section1">
        <form class="container" method="post" action="php/filtrar.php">
            <center><h1>Oferta inmobiliaria</h1></center>
            <center><h5>Descubre la mejor y más amplia oferta inmobiliaria con nosotros.</h5></center>     
            <center><h5>Desde 1983 ayudándote a encontrar la casa de tus sueños.</h5></center>
            <div class="container contenedorSeccion">
                <div class="row filaContenedor">
                    <button class="col item viviendas" type="submit" value="Viviendas" name="categoria">
                        <span><h5>VIVIENDAS</h5></span>
                    </button>
                    <button class="col item obraNueva" type="submit" value="ObraNueva" name="categoria">
                        <span><h5>OBRA NUEVA</h5></span>
                    </button>
                </div>
                <div class="row filaContenedor">
                    <button class="col item pisos" type="submit" value="Pisos" name="categoria">
                        <span><h5>PISOS</h5></span>
                    </button>
                    <button class="col item locales" type="submit" value="Locales" name="categoria">
                        <span><h5>LOCALES</h5></span>
                    </button>
                    <button class="col item fincasRusticas" type="submit" value="FincasRusticas" name="categoria">
                        <span><h5>FINCAS RÚSTICAS</h5></span>
                    </button>
                </div>
            </div>
        </form>
    </section>
    
    <div data-bs-theme="dark" class="p-3 text-body bg-body">
        <div class="container">
            <footer class="py-5">
                <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of what's new and exciting from us.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                    </form>
                </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>© 2023 Juan Diego. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                </ul>
                </div>
            </footer>
        </div>
    </div>

    <script src="js/navBar.js"></script>
    <script src="js/variableBanner.js"></script>
</body>
</html>