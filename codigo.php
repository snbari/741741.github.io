<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$mensaje = $_POST['Mensaje'];



$to = 'sannicolasdebari.superior@gmail.com'; 
$email_subject = "Nuevo mensaje: de la web"; 
$email_body = "Haz recibido un nuevo mensaje 
              \n Nombre: $nombre 
              \n Correo: $email
              \n Celular: $celular
              \n Mensaje o consulta: \n $mensaje \n"; 
$headers = "From: $email";



mail($to, $email_subject, $email_body, $celular_body, $headers); 

echo 'Pronto nos estaremos comunicando con usted!';
?>
<br>
<br>
<button><a href="index.html">Volver</a></button>