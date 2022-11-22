<?php
$name = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mine-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $name . " \r\n";
$mensaje .= "Su email es: " . $email . " \r\n";
$mensaje .= "Telefono de contacto: " . $telefono . " \r\n";
$mensaje .= "Asunto: " . $asunto . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'jasbircoro.dev@gmail.com';
$asunto = 'Mensaje desde portafolio';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>
