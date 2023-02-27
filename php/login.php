<?php 

//Conectamos a la base de datos
$hostname_db = "localhost";
$database_db = "basedatos";
$username_db = "usuario";
$password_db = "password";
$conexion = mysql_pconnect($hostname_db, $username_db, $password_db) or trigger_error(mysql_error(),E_USER_ERROR);

//Seleccionamos la base de datos
mysql_select_db($database_db, $conexion);


    //Consultamos si existe la cuenta por user y password (en md5)
	$instruccion=sprintf("SELECT * FROM users WHERE nombre=%s AND password=%s",
	 
    GetSQLValueString($_POST['user'], "text"),
	GetSQLValueString(md5($_POST['password']), "text"));

	$consulta=mysql_query($instruccion);
	$datos=mysql_fetch_assoc($consulta);
	$cantidad=mysql_num_rows($consulta);

   if ($cantidad==1){
	
	//Si existe iniciamos la sesión
	$_SESSION['nombreuser']=$datos['nombre'];
	$_SESSION['iduser']=$datos['id'];

	//Redireccionamos a la pagina usuario.php
	header('Location: usuario.php');
	}

	//Si no existe redireccionamos a la pagina error.php
	else{
        header('Location: ../index.html');
        echo '<script>alert("Error")';
    } 

mysql_free_result($consulta);

?>