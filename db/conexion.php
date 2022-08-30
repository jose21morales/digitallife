<?php

$host = 'localhost';
$user = 'root';
$password = 'system456';
$db = 'digitallife';

$conexion = mysqli_connect($host, $user, $password);

if (mysqli_connect_errno($conexion)) {
	echo "Error al conectar a la BBDD";
	exit();
}

mysqli_select_db($conexion, $db) or die("No se encuentra la Base de Datos");

mysqli_set_charset($conexion, "utf8");

?>