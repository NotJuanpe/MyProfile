<?php

$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['text'];

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje = "El mail de la persona es  " . $email . ",\r\n";
$mensaje = "El mensaje es " . $mensaje . ",\r\n";
$mensaje = "Enviado el  " . date('d/m/Y', time());

$para = 'juannpe01@gmail.com';
$asunto = 'Este mail fue enviado desde la web personal';

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:exito.html');


?>