<?php

$host = 'localhost';
$user = 'root';
$pass = 'system456';
$db = 'digitallife';

$conexion = mysqli_connect($host, $user, $pass);
if (mysqli_connect_errno($conexion)) {
	echo "Error al conectar con la Base de Datos";
	exit();
}

mysqli_select_db($conexion, $db) or die("Base de Datos no encontrada");

mysqli_set_charset($conexion, "utf8");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$query = "INSERT INTO USUARIOS (Nombre, Correo, Telefono, Mensaje) VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";
$result = mysqli_query($conexion, $query) or die("Error al insertar los datos");

mysqli_close($conexion);
echo "Datos insertados correctamente";

?>