<?php
    session_start();
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
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .barNav{
            background-color: #2D2D2D;
        }
    </style>
</head>
<body>
<body>
    <header>
        <div class="barNav sticky-top" id="navBar">
            <div class="container">
                <div class="contenedor navbar navbar-expand-lg navbar-dark ">
                    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand logo" href="../index.php">
                        <img src="../img/gilmar-logo.png" height="40px">
                    </a>
                    <div class="collapse navbar-collapse nav" id="navbarNav">
                        <ul class="navbar-nav">
                            <a href="comprar.php"><li class="nav-item">Comprar</li></a>
                            <a href="vender.php"><li class="nav-item">Vender</li></a>
                            <a href=""><li class="nav-item">Alquilar</li></a>
                            <a href=""><li class="nav-item">Nosotros</li></a>
                            <a href=""><li class="nav-item">Servicios</li></a>
                            <a href=""><li class="nav-item">Blog</li></a>
                            <a href=""><li class="nav-item">Contacto</li></a>
                        </ul>
                    </div>
                    <div class="botonesResponsivo">
                        <?php
                            if($_SESSION["usuario"]){
                                echo '
                                    <div class="dropdown">
                                        <button class="button" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            '.$_SESSION["usuario"].'
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="gestion.php">Gestión</a></li>
                                            <li><a class="dropdown-item" href="cerrarSesion.php">
                                                <button type="button" class="btn btn-danger">CERRAR SESIÓN</button>
                                            </a></li>
                                        </ul>
                                    </div>
                                ';
                            }
                            else echo '
                
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
                                
                            '
                        ?>
                    </div>
                </div>
                <div class="botones">
                    <?php
                        if($_SESSION["usuario"]){
                            echo '
                                <div class="dropdown">
                                    <button class="button1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        '.$_SESSION["usuario"].'
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="gestion.php">Gestión</a></li>
                                        <li><a class="dropdown-item" href="cerrarSesion.php">
                                            <button type="button" class="btn btn-danger">CERRAR SESIÓN</button>
                                        </a></li>
                                    </ul>
                                </div>
                            ';
                        }
                        else{
                            echo '
                                <button class="button1" data-bs-toggle="modal" data-bs-target="#IniciarSesion">Acceso</button>
                                <button class="button2" data-bs-toggle="modal" data-bs-target="#Registro">Registro</button>
                            ';
                        }
                    ?>
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
                    <form method="post" action="login.php" name="signup-form">
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
                    <form method="post" action="registro.php" name="signup-form">
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
    <section>
        <?php
            echo '<center><h2>Todo</h2></center>';
        ?>
        <div class="container d-flex justify-content-center" id="productos" style="flex-flow: row wrap; gap:20px;">
            <?php

                require_once('conexion.php');


                $resul = mysqli_query($conexion,"SELECT * FROM PRODUCTOS") ;

                foreach($resul as $row){
                    echo '
                        <div class="card" style="width: 18rem;">
                            <img src="../img/uploads/'.$row['Imagen'].'" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">'.$row['Nombre'].'</h5>
                                <p class="card-text"> 
                                    <table>
                                        <tr>
                                            <td>
                                                Categoria: '. $row['Categoria'].'
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Pais: '. $row['Pais'].'
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Población: '. $row['Ciudad'].'
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Código Postal: '. $row['CP'].'
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Dirección: '. $row['Direccion'].'
                                            </td>
                                        </tr>
                                        <tr>
                                        <td>
                                            Precio: '. $row['Precio'].'€
                                        </td>
                                        </tr>
                                    </table>
                                </p>
                                <form method = "post" action = "producto.php">
                                    <input type = "text" name = "producto" style="display: none;" value="'.$row['IdProducto'].'"> 
                                    <button type="submit" class="btn btn-primary">Ver</button>
                                </form>
                            </div>
                        </div>
                    ';
                } 

            ?>
        </div>
    </section>


</body>
</html>