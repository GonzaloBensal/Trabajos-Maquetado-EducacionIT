<!-- Codigo php para enviar mail con los datos archivo, ejemplo, nombre, email, consulta y suscripcion proporcionados en el formulario form del html contacto.html -->
<!-- captura de variables -->
<?php
$archivo= $_POST['archivo'];
$ejemplo= $_POST['ejemplo'];
$nombre= $_POST['nombre'];
$email= $_POST['email'];
$consulta= $_POST['consulta'];
$suscripcion=$_POST['suscripcion'];

$mensaje="
<strong>Nombre: </strong> $nombre <br /><br /> 
<strong>Email: </strong>$email<br /> <br /> 
<strong>Consulta: </strong>$consulta <br /><br />
<strong>Opción elegida: </strong>$ejemplo<br /><br /> 
<strong>Archivo(s): </strong>$archivo<br /><br /> <strong>Se suscribió?</strong>$suscripcion<br /><br />";

mail("gonzalojulian_fb@hotmail.com", "Consulta de mi web", $mensaje, "From: $nombre <$mail>\nReply-To:$mail\nContent-Type: text/html; charset-UTF-8\n");
?>