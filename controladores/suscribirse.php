<?php 
	$emailwc = "wgalimberti@winecity.com.ar";
	$emailam = "alemarchena@gmail.com";
	
	$email = $_POST["email"];
	$tipo = $_POST["tipo"];
	

	$titulo = "Se ha suscripto una persona a la web";
	if($tipo=="si"){
		$subtitulo = "Suscripción online ";
		$cuerpo = "Email: " . $email . " se ha suscripto a Wine City";

	}else
	{
		$subtitulo = "Eliminada Suscripción online ";
		$cuerpo = "Email: " . $email . " se ha eliminado un suscripto de Wine City";
	
	}

	mail($emailwc, $titulo , $subtitulo . $cuerpo);
	mail($emailam, $titulo , $subtitulo . $cuerpo);
?>