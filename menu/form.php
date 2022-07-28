<?php

$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['text'];

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje = "El mail de la persona es  " . $email . ",\r\n";
$mensaje = "El mensaje es " . $mensaje . ",\r\n";

$para = 'juannpe01@gmail.com';
$asunto = 'Este mail fue enviado desde la web personal';

header('Location:exito.html');

mail($para, $asunto, utf8_decode($mensaje), $header);



?>