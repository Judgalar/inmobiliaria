<?php
session_start();
require_once('conexion.php');


$propietario = $_SESSION["idUsuario"];
$idProducto = $_POST['producto'];

$nombreImagen = $_FILES['imagen']['name'];
$tipoImagen = $_FILES['imagen']['type'];
$sizeImagen = $_FILES['imagen']['size'];

$consultaImagen = mysqli_query($conexion,"SELECT * FROM IMAGENES WHERE Nombre = '$nombreImagen'");
$nr = mysqli_num_rows($consultaImagen);

if($nr == 0){
    if($sizeImagen <= 5000000){
        if($tipoImagen=="image/jpeg" || $tipoImagen=="image/jpg" || $tipoImagen=="image/png"){

            $carpetaDestino = $_SERVER['DOCUMENT_ROOT']. '/inmobiliaria/img/uploads/' ;  //RUTA DE LA CARPETA DESTINO EN SERVIDOR

            if( move_uploaded_file($_FILES['imagen']['tmp_name'],$carpetaDestino.$nombreImagen) ){ //MOVER LA IMAGEN DE TMP AL DIRECTORIO ESCOGIDO

                $query = mysqli_query($conexion,"INSERT INTO IMAGENES(Tipo,Nombre,Size,Producto) 
                    VALUES('$tipoImagen','$nombreImagen','$sizeImagen','$idProducto');"); 
            
                if ($query) {
                    echo "<script>alert('Añadido correctamente'); window.location = 'gestion.php'</script>";
                }
                else{
                    echo "<script>alert('Error en el registro'); window.location = 'gestion.php'</script>";
                }  
            }
            else echo 'no se ha podido mover a ' .$carpetaDestino . '¿RUTA CORRECTA?¿PERMISOS?';

        }else echo 'Tipo no permitido: '.$tipoImagen;
    }
    else echo 'Demasiado grande';
} else echo "<script>alert('Cambia el nombre de la imagen'); window.location = 'gestion.php'</script>";
    



?>