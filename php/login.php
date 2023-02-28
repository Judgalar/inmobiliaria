<?php 
require_once('conexion.php');

if (! $_POST
    || trim($_POST['user'])   === ''
    || trim($_POST['password'])     === ''
    ) 
header("Location: ../index.php");

else{
	$usuario = $_POST['user'];
	$password = $_POST['password'];

	$query = mysqli_query($conexion,"SELECT * FROM USUARIOS WHERE Correo = '$usuario' AND Clave = '$password'");
	$nr = mysqli_num_rows($query);
	$datos = $query->fetch_assoc();

	if($nr == 1){
		session_start();
		$_SESSION["idUsuario"] = $datos['IdUsuario'];
		$_SESSION["usuario"] = $usuario;
		header("location: ../index.php");
	}
	else if($nr == 0){
		echo "<script>alert('Usuario no existe o contraseña incorrecta'); window.location = '../index.php'</script>";
	} 
}
?>