<?php

require 'db/conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$query = "INSERT INTO usuarios (nombre, correo, telefono, mensaje) VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";
$result = mysqli_query($conexion, $query) or die("Error al insertar los datos");

mysqli_close($conexion);
echo "Datos insertados correctamente";

/*
$query = "SELECT * FROM USUARIOS";
$result = mysqli_query($conexion, $query);

while ($fila = mysqli_fetch_row($result)) {

echo $fila[0] . " " . $fila[1] . " " . $fila[2] . " " . $fila[3] . " " . $fila[4];

echo "<br>";

}
*/

?>