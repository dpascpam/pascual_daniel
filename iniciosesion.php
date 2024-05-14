<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIAR SESION</title>
    <link rel="stylesheet" href="CSS_BLOQUEO/style.css">
</head>
<body>
<?php
session_start();


?>
<div class="divgrande">
    <div class="divpequeño">
        <h1>INICIO DE SESIÓN</h1>
    </div>
    <div class="general">
        <form method="post" action="procesar_login.php"> <!-- Añadido el atributo action -->
            <div class="usuario" id="usuario">
                <label for="nombre_usuario">Nombre de usuario</label>
                <input type="text" id="nombre_usuario" name="nombre_usuario">
            </div>
            <div class="contrasena" id="contrasena">
                <label for="contrasena">Contraseña</label>
                <input type="password" id="contrasena" name="contrasena">
            </div>
            <div id="botones">
                <div class="entrar">
                    <button type="submit">Iniciar Sesión</button>
                </div>
                <div class="entrar" id="crearcuenta">
                    <a href="crear_usuario.php">Crear Cuenta</a>
                </div>
            </div>
        </form> <!-- Cierre del formulario -->
    </div>
</div>

</body>
</html>