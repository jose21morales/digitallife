<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
</head>
<body>
	<center>
		<form action="enviar.php" method="POST">
			<input type="text" name="nombre" placeholder="Nombre:" required><br><br>
			<input type="text" name="correo" placeholder="Correo:" required><br><br>
			<input type="text" name="telefono" placeholder="Telefono:" required><br><br>
			<textarea name="mensaje" placeholder="Mensaje:"></textarea><br><br>
			<input type="submit" value="Enviar">
		</form>
	</center>

</body>
</html>