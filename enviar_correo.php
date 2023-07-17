<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre_apellido"];
    $correo = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    // Configura la dirección de correo a la que quieres enviar el mensaje
    $destinatario = "rochaeloy11@gmail.com";

    // Crea el contenido del correo
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo: $correo\n";
    $contenido .= "Asunto: $asunto\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    // Envía el correo
    mail($destinatario, "Mensaje del formulario de contacto", $contenido);

    // Redirige al usuario a una página de confirmación o muestra un mensaje de éxito
    header("https://www.linkedin.com/feed/");
    exit();
}
?>