<?php

require '../db/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$usuario = mysqli_real_escape_string($conexion, $usuario);
	$password = mysqli_real_escape_string($conexion, $password);

	$consulta = "SELECT * FROM ADMINISTRADOR WHERE usuario = '$usuario' and password = '$password'";
	$resultado = mysqli_query($conexion, $consulta) or die("Error al iniciar sesion");
	
	if ($row = mysqli_fetch_array($resultado)) {
		if ($password = $row['password'] && $usuario = $row['usuario']) {
			
			session_start();
			$_SESSION['usuario'] = $usuario;
			header('Location: tabla_usuarios.php');

		}

	} else {
		echo "Datos incorrectos";
	}

	mysqli_close($conexion);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<div class="contenedor-body">
	<center>
		<div class="contenedor-form-regresar">
		<form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			<h2 class="form-titulo">Login</h2>
			<input type="text" name="usuario" placeholder="Usuario:"><br><br>
			<input type="password" name="password" placeholder="Contraseña:"><br><br>
			<input type="submit" value="Entrar">
		</form>
		
			<p class="regresar"><a class="form-regresar" href="../index.php">&laquo; Regresar</a></p>
		</div>
	</center>
	</div>
</body>
</html>