<?php
session_start();
require_once('conexion.php');

$idProducto = $_POST['producto'];


echo $propietario; echo $idProducto;

$query = mysqli_query($conexion, "DELETE FROM productos WHERE IdProducto= $idProducto" ); 

if ($query) {
    echo "<script>alert('Modificado correctamente'); window.location = 'gestion.php'</script>";
}
else{
    echo "<script>alert('Error'); window.location = 'gestion.php'</script>";
}  
               
    



?>