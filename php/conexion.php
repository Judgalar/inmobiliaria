<?php
$dbhost = "localhost";
$username = "root";
$password = "";
$database = "Inmobiliaria";
// Create connection
$conexion = mysqli_connect($dbhost, $username, $password, $database);
// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
?>