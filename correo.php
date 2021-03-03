<?php
    // require_once('build/PHPMailer/src/PHPMailer.php');
    use PHPMailer\PHPMailer\PHPMailer;

    require 'build/PHPMailer/src/Exception.php';
    require 'build/PHPMailer/src/PHPMailer.php';
    require 'build/PHPMailer/src/SMTP.php';
    
    $mailer = new PHPMailer();
    
    $mailer->setFrom($email, $nombre . $apellido);
    $mailer->addReplyTo($email, $nombre . $apellido);

    $miEmail = 'lucasggonzalez94@outlook.com';

    $mailer->addAddress($miEmail, 'Lucas Gonzalez');
    $mailer->Subject = $asunto;

    $mensajeCompleto = "Remitente: $nombre $apellido\nTelefono: $telefono\nEmpresa: $empresa\n\n> $mensaje";
    $mailer->msgHTML($mensajeCompleto);

    if(!$mailer->send()) {
        echo "Error al enviar el mensaje: " . $mail­->ErrorInfo;
        exit;
    } else {
        echo "Mensaje enviado!!";
    }
    header('location: /');
?>

<script>
    Swal.fire({
        // position: 'top-end',
        icon: 'success',
        title: 'E-mail enviado correctamente',
        showConfirmButton: false,
        timer: 2000
    })
</script>