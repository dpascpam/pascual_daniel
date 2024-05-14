<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="CSS_BLOQUEO/style.css">
</head>
<body>
<form method='post' action='crear_session.php'>

<div class="divgrande">
    <div class="divpequeño">
        <h1>CREAR NUEVA CUENTA</h1>
    </div>
    <div class="general">
        <div class="usuario" id="usuario" name="usuario">
            <label for="usuario">Usuario</label>
            <input type="text" id='usuario' name='usuario'>
        </div>
        <div class="contrasena" id="contrasena" name="contrasena">
            <label for="clave">Contraseña</label>
            <input type="password" id='clave' name='clave'>
        </div>
    </div>
    <div id="botones">
        <div class="entrar">
            <a href="iniciosesion.php">Volver a Iniciar Sesión</a>
        </div>
        <div class="entrar">
            <button type='submit' >Enviar</button>
        </div>
    </div>
</div>

</form>

<?php
if(isset($_GET["control"])) {                              
    $userControl = $_GET['control'];                             
                                     
    if($userControl == 1){                                     
        echo"<h4>El usuario no es válido, ya existe.</h4>";                                 
    }                           
}

?>

</body>
</html>