<?php
	session_start();
	// error_reporting(0); // Función para borrar errores de PHP, usualmente se usa cuando ya esta terminado el proyecto
	$session = $_SESSION['usuario'];

	if ($session == null || $session = '') {
		echo "Acceso denegado largo antes de que llame a la policia";
		die();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administración</title>
	<link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>

	<?php
	require '../db/conexion.php';

	$query = "SELECT * FROM USUARIOS";
	$result = mysqli_query($conexion, $query);
		
	?>
	<br>
	<p class="cerrar"><a class="admin-cerrar" href="cerrar_session.php">Cerrar sesion</a></p>
	<center>
	<h3 class="bienvenido"><?php echo "Bienvenido " . $_SESSION['usuario']; ?></h3>
	<h2 class="admin-usuarios">Usuarios registrados</h2>
	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Telefono</th>
				<th>Mensaje</th>
			</tr>
		</thead>
		<?php

		while ($row = mysqli_fetch_array($result)) {
		
		?>
		<tbody>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nombre']; ?></td>
				<td><?php echo $row['correo']; ?></td>
				<td><?php echo $row['telefono']; ?></td>
				<td><?php echo $row['mensaje']; ?></td>
			</tr>
		<?php
			}
		?>
		</tbody>
	</table>
</center>

</body>
</html>