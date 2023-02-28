<?php 

require_once('conexion.php');

if (! $_POST
    || trim($_POST['user'])   === ''
    || trim($_POST['password'])     === ''
    || trim($_POST['telefono'])     === ''
    )
{

    echo "<script>alert('Datos incorrectos'); window.location = '../index.php'</script>";
}


else{
	$usuario = $_POST['user'];
	$password = $_POST['password'];
    $telefono = $_POST['telefono'];

	$query = mysqli_query($conexion,"SELECT * FROM USUARIOS WHERE Correo = '$usuario' ");
	$nr = mysqli_num_rows($query);

	if($nr == 1){
        echo "<script>alert('Usuario ya registrado'); window.location = '../index.php'</script>";
	}
	else if($nr == 0){
        $query = mysqli_query($conexion," INSERT INTO USUARIOS(Correo, Clave, Telefono) VALUES ('$usuario', '$password', '$telefono'); ");
        if (!$query) {
            echo "<script>alert('Error en el registro'); window.location = '../index.php'</script>";
        }
        else{
            echo "<script>alert('Usuario registrado correctamente'); window.location = '../index.php'</script>";
        }  
	} 
}

?>
