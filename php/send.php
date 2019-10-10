<?php

if (isset($_POST['name']) && isset($_POST['email'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$to = 'sergio.hidalgo@viajemosausa.com';
	$subject = "Contacto ViajemosaUSA.com";
	$body = '
		Nombre: ' .$name.'
		Email: ' .$email.'
		Telefono: ' .$phone.'
		Mensaje: ' .$message;
	
	$headers = "From: ".$name." <".$email.">\r\n";
	$headers .= "Reply-To: ".$email."\r\n";
	
	$header_ = "From: ViajemosaUSA.com\r\n";
	$header_ .= "Reply-To: ".$email."\r\n";
	
	if( mail($to, $subject, $body, $headers)){
		echo '<br>';
		echo 'Gracias por contactarnos! Te responderemos pronto<br>';
	} else {
		echo 'Ha ocurrido un error, por favor vuelva a intentar';
	}
	if( mail($email, $subject, $body, $header_)) {
		echo '<br>';
		echo 'Te hemos enviado un correo a '.$email.'<br>';
		echo 'Si no lo ves en tu bandeja de entrada, revisa tu spam.';
	}
} else {
	echo 'Servicio no disponible por el momento.<br>';
	echo 'Por favor, contáctese directamente con el administrador.';
} 
?>