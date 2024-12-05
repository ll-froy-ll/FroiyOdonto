<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login EcoDent Unifranz</title>
    <!-- Meta etiquetas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fuentes y estilos -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para ingresar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>
            <div class="contenedor__login-register">
                <!-- Formulario de Inicio de Sesión -->
                <form action="modules/login/login.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" name="username" placeholder="Usuario" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <button type="submit">Entrar</button>
                </form>
                <!-- Formulario de Registro -->
                <form action="" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Correo Electrónico">
                    <input type="password" placeholder="Contraseña">
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>

    </main>

    <!-- Mostrar mensaje de error si las credenciales son incorrectas -->
    <?php
    if (isset($_GET['error'])) {
        echo '<p style="color:red; text-align:center;">Usuario o contraseña incorrectos. Por favor, inténtalo de nuevo.</p>';
    }
    ?>

    <!-- Scripts -->
    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
