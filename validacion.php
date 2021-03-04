<?php
    $nombre = '';
    $apellido = '';
    $email = '';
    $telefono = '';
    $empresa = '';
    $asunto = '';
    $mensaje = '';

    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validar que los campos no esten vacios
        $nombre = ($_POST['nombre']);
        $apellido = $_POST['apellido'];
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $telefono = filter_var($_POST['tel'], FILTER_VALIDATE_INT);
        $empresa = $_POST['empresa'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];

        // Validar que los campos tengan el contenido adecuado
        if (!$nombre) {
            $errores[] = 'El nombre es obligatorio';
        }

        if (!$apellido) {
            $errores[] = 'El apellido es obligatorio';
        }

        if (!$email) {
            $errores[] = 'El e-mail es obligatorio o no es válido';
        }

        if (!$asunto) {
            $errores[] = 'El asunto es obligatorio';
        }

        if (!$mensaje) {
            $errores[] = 'El mensaje es obligatorio';
        }

        // Enviar email
        include 'correo.php';
    }