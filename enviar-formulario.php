<?php

// Incluye el archivo autoload.php de Composer para cargar PHPMailer automáticamente
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $mail = new PHPMailer(true);
    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'correopruebas20100@gmail.com'; // Reemplaza con tu correo
        $mail->Password = 'pede tegy vjmv ajhb'; // Reemplaza con tu contraseña de aplicación
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Configuración del correo
        $mail->setFrom($email, $nombre); // Correo y nombre de quien envía
        $mail->addAddress('Academiafutbolaustral@gmail.com'); // Correo de destino

        $mail->Subject = "Nuevo mensaje de contacto de $nombre";
        $mail->Body = "Nombre: $nombre\nCorreo: $email\nTeléfono: $telefono\n\nMensaje:\n$mensaje";

        $mail->send();
        echo "¡Mensaje enviado correctamente!";
    } catch (Exception $e) {
        echo "Hubo un error al enviar el mensaje. Por favor, intenta nuevamente.";
    }
}


?>
