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
    || trim($_POST['precio'])     === ''
    )
{

    echo "<script>alert('Datos incorrectos'); window.location = 'gestion.php'</script>";
}
else{
    $idProducto = $_POST['producto'];
    $propietario = $_SESSION["idUsuario"];
	$categoria = $_POST['categoria'];
    $nombre = $_POST['nombre'];
    $pais = $_POST['pais'];
    $ciudad = $_POST['ciudad'];
    $cp = $_POST['cp'];
    $direccion = $_POST['direccion'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    
    echo $propietario; echo $idProducto;

    $query = mysqli_query($conexion, "UPDATE PRODUCTOS SET Categoria='$categoria', Nombre='$nombre', Pais='$pais', Ciudad='$ciudad', CP='$cp', Direccion='$direccion', Descripcion='$descripcion', Precio='$precio' WHERE IdProducto = '$idProducto';" ); 

    if ($query) {
        echo "<script>alert('Modificado correctamente'); window.location = 'gestion.php'</script>";
    }
    else{
        echo "<script>alert('Error'); window.location = 'gestion.php'</script>";
    }  
               
    

}

?>