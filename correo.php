<?php
    $miEmail = 'lucasggonzalez@outlook.com';
    $mensajeCompleto = "Remitente: $nombre $apellido\nTeléfono: $telefono\nEmpresa: $empresa\n\n> $mensaje";

    // echo '<pre>';
    // var_dump($mensajeCompleto);
    // echo '</pre>';

    // exit;

    $header = "From: '$email'" . "\r\n";
    $header .= "Reply-To: '$miEmail" . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion();
    $mail = mail($miEmail, $asunto, $mensajeCompleto, $header);