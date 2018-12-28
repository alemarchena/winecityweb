<?php 
	$emailwc = "wgalimberti@winecity.com.ar";
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$email = $_POST["email"];
	$telefono = $_POST["telefono"];
	$mensaje = $_POST["mensaje"];

	$titulo = "Mensaje Web";
	$subtitulo = "Contacto online ";
	


	$cuerpo = "Nombre: " . $nombre . ", Apellido: " . $apellido . " - Email: " . $email . ", Teléfono: " . $telefono . " - Mensaje: " . $mensaje;

	mail($emailwc, $titulo , $subtitulo . $cuerpo);

	echo "Enviado correctamente";
?>