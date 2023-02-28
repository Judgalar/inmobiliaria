<?php
session_start();
require_once('conexion.php');

if (! $_POST
    || trim($_POST['nombre'])   === ''
    || trim($_POST['pais'])     === ''
    || trim($_POST['ciudad'])     === ''
    || trim($_POST['cp'])     === ''
    || trim($_POST['direccion'])     === ''
    || trim($_POST['descripcion'])     === ''
    || trim($_POST['categoria'])     === ''
    )
{

    echo "<script>alert('Datos incorrectos'); window.location = 'vender.php'</script>";
}
else{
    $propietario = $_SESSION["idUsuario"];
	$categoria = $_POST['categoria'];
    $nombre = $_POST['nombre'];
    $pais = $_POST['pais'];
    $ciudad = $_POST['ciudad'];
    $cp = $_POST['cp'];
    $direccion = $_POST['direccion'];
    $descripcion = $_POST['descripcion'];

    $nombreImagen = $_FILES['imagen']['name'];
    $tipoImagen = $_FILES['imagen']['type'];
    $sizeImagen = $_FILES['imagen']['size'];

    $consultaImagen = mysqli_query($conexion,"SELECT * FROM PRODUCTOS WHERE Imagen = '$nombreImagen'");
    $nr = mysqli_num_rows($consultaImagen);

    if($nr == 0){
        if($sizeImagen <= 5000000){
            if($tipoImagen=="image/jpeg" || $tipoImagen=="image/jpg" || $tipoImagen=="image/png"){

                $carpetaDestino = $_SERVER['DOCUMENT_ROOT']. '/inmobiliaria/img/uploads/' ;  //RUTA DE LA CARPETA DESTINO EN SERVIDOR

                if( move_uploaded_file($_FILES['imagen']['tmp_name'],$carpetaDestino.$nombreImagen) ){ //MOVER LA IMAGEN DE TMP AL DIRECTORIO ESCOGIDO

                    $query = mysqli_query($conexion,"INSERT INTO PRODUCTOS(Propietario,Categoria,Nombre,Pais,Ciudad,CP,Direccion,Descripcion,TipoImagen,Imagen) 
                        VALUES('$propietario','$categoria','$nombre','$pais','$ciudad','$cp','$direccion','$descripcion','$tipoImagen','$nombreImagen');"); 
                
                    if ($query) {
                        echo "<script>alert('Registrado correctamente'); window.location = '../index.php'</script>";
                    }
                    else{
                        echo "<script>alert('Error en el registro'); window.location = 'vender.php'</script>";
                    }  
                }
                else echo 'no se ha podido mover a ' .$carpetaDestino . '¿RUTA CORRECTA?¿PERMISOS?';

            }else echo 'Tipo no permitido: '.$tipoImagen;
        }
        else echo 'Demasiado grande';
    } else echo "<script>alert('Cambia el nombre de la imagen'); window.location = 'vender.php'</script>";
    

}

?>