<?php
    session_start();
    include 'validacion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="Portfolio Lucas Gonzalez">
    <link rel="stylesheet" href="/build/icomoon/style.css">
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="shortcut icon" href="build/img/favicon.png">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Lucas González | Portfolio</title>
</head>
<body>
    
    <main class="main">
        <header class="header">
            <input type="checkbox" id="active">
            <label for="active" class="btn-menu"><i class="fas fa-bars"></i></i></label>
            <nav class="navegacion">
                <a href="/">Inicio</a>
                <a href="#sobre-mi" id="link-sobre-mi">Sobre mí</a>
                <a href="#tecnologias" id="link-tecnologias">Tecnologías</a>
                <a href="#proyectos" id="link-proyectos">Proyectos</a>
                <a href="#contacto" id="link-contacto">Contacto</a>
                <a href="#" id="btn-dark" class="btn-dark"><i class="fas fa-moon"></i></a>
            </nav>
        </header>

        <div class="contenedor-avatar">
            <a href="#sobre-mi">
                <div class="avatar">
                    <img src="/build/img/avatar.png" alt="avatar" id="avatar">
                    <h1>Lucas González<span>Portfolio</span></h1>
                </div>
            </a>
        </div>
    </main>

    <section id="sobre-mi" class="contenedor">
        <div class="contenido">
            <h2>Sobre mí</h2>

            <p>¡Hola! te cuento un poco sobre mí. Soy estudiante de programación, tanto autodidacta como a nivel universitario, cursando el último cuatrimestre en la Tecnicatura Superior en Programación de la Universidad Tecnológica Nacional de Mendoza (solo me quedan cuatro materias por cursar), estoy en busca de adentrarme en el mundo laboral, con conocimientos en diferentes tecnologías, especializandome en el desarrollo web, tanto en el front-end como en el back-end. Poseo un nivel de inglés intermedio, responsable, proactivo, con capacidad de trabajar en equipo, de adaptarme al cambio y aprender rápidamente, con muchas ganas de ganar experiencia y expandir mis conocimientos en las tecnologías actuales.</p>
        </div>
    </section>

    <section class="contenedor" id="tecnologias">
        <div class="contenido">
            <h2>Tecnologías</h2>

            <div class="tecnologias-grid">
                <div class="tecnologia">
                    <div class="icon">
                        <i class="fab fa-html5"></i>
                    </div>
                    <p>HTML</p>
                </div>
                <div class="tecnologia">
                    <div class="icon">
                        <i class="fab fa-css3-alt"></i>
                    </div>
                    <p>CSS</p>
                </div>
                <div class="tecnologia">
                    <div class="icon">
                        <i class="fab fa-sass"></i>
                    </div>
                    <p>SASS/SCSS</p>
                </div>
                <div class="tecnologia">
                    <div class="icon">
                        <i class="fab fa-js-square"></i>
                    </div>
                    <p>JavaScript</p>
                </div>
                <div class="tecnologia">
                    <div class="icon">
                        <i class="fab fa-react"></i>
                    </div>
                    <p>React JS</p>
                </div>
                <div class="tecnologia">
                    <div class="icon">
                        <i class="fab fa-node"></i>
                    </div>
                    <p>Node JS</p>
                </div>
                <div class="tecnologia">
                    <div class="icon">
                        <i class="fab fa-java"></i>
                    </div>
                    <p>Java</p>
                </div>
                <div class="tecnologia">
                    <div class="icon">
                        <i class="icon-csharp"></i>
                    </div>
                    <p>C# (.NET)</p>
                </div>
                <div class="tecnologia">
                    <div class="icon">
                        <i class="fab fa-php"></i>
                    </div>
                    <p>PHP</p>
                </div>
                <div class="tecnologia">
                    <div class="icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <p>MySQL</p>
                </div>
                <div class="tecnologia">
                    <div class="icon">
                        <i class="fab fa-git"></i>
                    </div>
                    <p>GIT</p>
                </div>
                <div class="tecnologia">
                    <div class="icon">
                        <i class="icon-adobephotoshop"></i>
                    </div>
                    <p>Photoshop</p>
                </div>
                <div class="tecnologia">
                    <div class="icon">
                        <i class="icon-adobeillustrator"></i>
                    </div>
                    <p>Illustrator</p>
                </div>
                <div class="tecnologia">
                    <div class="icon">
                        <i class="fab fa-windows"></i>
                    </div>
                    <p>Windows</p>
                </div>
                <div class="tecnologia">
                    <div class="icon">
                        <i class="fab fa-linux"></i>
                    </div>
                    <p>Linux</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contenedor" id="proyectos">
        <div class="contenido">
            <h2>Proyectos</h2>
            <div class="proyectos"></div>
        </div>
    </section>

    <section class="contenedor" id="contacto">
        <div class="contenido">
            
            <div class="formulario">
                <div class="info-contacto">
                    <h4>Contacto</h4>

                    <div class="items">
                        <p><i class="fas fa-map-marker-alt"></i> Mendoza - Argentina</p>
                        <a href="mailto:lucasggonzalez@outlook.com"><i class="fas fa-envelope"></i> lucasggonzalez@outlook.com</a>
                        <a href="https://wa.link/kq0zdb" target="_blank"><i class="fab fa-whatsapp"></i>
                            +54-2616209794</a>
                    </div>

                    <div class="enlaces-contacto">
                        <a href="https://www.linkedin.com/in/lucas-gonzalez-9168031b8/" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="https://github.com/lucasggonzalez94" target="_blank"><i class="fab fa-github-square"></i></a>
                    </div>
                </div>

                <form method="post" id="formulario">
                    <div class="inputs">
                        <fieldset>
                            <legend>Envíame un E-mail</legend>
                            <div class="nombre-apellido">
                                <input type="text" name="nombre" id="nombre" placeholder="Tu Nombre *" value="<?php echo $nombre ?>">
                                <input type="text" name="apellido" id="apellido" placeholder="Tu Apellido *" value="<?php echo $apellido ?>">
                            </div>

                            <input type="email" name="email" id="email" placeholder="Tu Email *" value="<?php echo $email ?>">
                            <input type="tel" name="tel" id="tel" placeholder="Tu Teléfono" value="<?php echo $telefono ?>">
                            <input type="text" name="empresa" id="empresa" placeholder="Nombre Empresa" value="<?php echo $empresa ?>">
                            <input type="text" name="asunto" id="asunto" placeholder="Asunto del E-mail *" value="<?php echo $asunto ?>">
                            <textarea name="mensaje" id="mensaje"><?php echo $mensaje ?></textarea>

                            <?php foreach($errores as $error): ?>
                                <div class="alerta error">
                                    <?php echo $error; ?>
                                </div>
                            <?php endforeach; ?>

                            <?php if(isset($_SESSION['resultado'])):
                                if($_SESSION['resultado'] === 0):?>
                                    <script>
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Error al enviar email',
                                            showConfirmButton: false,
                                            timer: 2000
                                        })
                                    </script>
                                <?php endif;

                                if($_SESSION['resultado'] === 1):?>
                                    <script>
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Email enviado correctamente',
                                            showConfirmButton: false,
                                            timer: 2000
                                        })
                                    </script>
                                <?php endif;
                            endif; ?>

                            <input type="submit" value="Enviar" class="btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p id="copyright"></p>
        <nav class="navegacion">
            <a href="/">Inicio</a>
            <a href="#sobre-mi">Sobre mí</a>
            <a href="#tecnologias">Tecnologías</a>
            <a href="#proyectos">Proyectos</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </footer>

    <script src="https://kit.fontawesome.com/59e2cd1765.js" crossorigin="anonymous"></script>
    <script src="/build/js/bundle.min.js"></script>
</body>
</html>