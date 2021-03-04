<?php

    // session_start();

    use PHPMailer\PHPMailer\PHPMailer;

    require 'build/PHPMailer/src/Exception.php';
    require 'build/PHPMailer/src/PHPMailer.php';
    require 'build/PHPMailer/src/SMTP.php';
    $mailer = new PHPMailer();
    
    $mailer->setFrom($email, $nombre . " " . $apellido);
    $mailer->addReplyTo($email, $nombre . " " . $apellido);

    $miEmail = 'lucasggonzalez94@outlook.com';

    $mailer->addAddress($miEmail, 'Lucas Gonzalez');
    $mailer->Subject = $asunto;

    $mensajeCompleto = "Remitente: $nombre $apellido\nTelefono: $telefono\nEmpresa: $empresa\n\n> $mensaje";
    $mailer->msgHTML($mensajeCompleto);

    if(!$mailer->send()) {
        $_SESSION['resultado'] = 0;
    } else {
        // echo "Mensaje enviado";
        $_SESSION['resultado'] = 1;
        header('location: /');
    }