<?php
$destino= "jose33.cecilio@gmail.com";
$destino= "josegabrielramirez07@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido = "nombre:" . $nombre . " \ncorreo: " . $correo . "\ntelefono: " . $telefono . "\nmensaje: " . $mensaje;
  mail($destino,"Contacto", $contenido);
echo '<script type="text/javascript">
		alert("El mensaje se envio correctamente");
		window.location.href= "index.html";
		</script>';


/*$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$body = "Nombre: " . $nombre . "<br>Correo: " . $correo . "<br>Telefono: " . $telefono . "<br>Mensaje: " . $mensaje;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);
try {
	//Server settings
	$mail->SMTPDebug = 0;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'jose33.cecilio@gmail.com';
	$mail->Password = 'mcbabocds';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;

	//Recipients
	$mail->setFrom('jose33.cecilio@gmail.com', $nombre);
	$mail->addAddress('jose33.cecilio@gmail.com');

	$mail->addAddress('gabii.josee141@gmail.com');
	//Content
	$mail->isHTML(true);
	//format to HTML
	$mail->Subject = 'Hola estoy enviando el correo desde localhost';
	$mail->Body    = $body;
	$mail->CharSet = 'UTF-8';
	$mail->send();
	echo '<script>
		alert("El mensaje se envio correctamente");
		window.history.go(-1);
		</script>';
} catch (Exception $e) {
	echo 'Hubo un error al enviar el mensaje: ', $mail->ErrorInfo;
}
*/
?>
