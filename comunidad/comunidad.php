<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidad Real Madrid</title>
    <link rel="stylesheet" href="csscomunidad/comunidad.css">
</head>
<body>
        <div class="barra" id="inicio">
            <a href="../inicio/inicio.php">Noticias</a>
            <a href="../Palmares/palmares.php">Palmarés</a>
            <a href="../santiago bernabeu/bernabeu.php">Santiago Bernabéu</a> 
            <a href="../Tienda/tienda.php">Tienda</a>
            <a href="../jugadores/jugadores.php">Jugadores</a>
            <a href="../comunidad/comunidad.php">Comunidad</a>     
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <a href="../cerrar_sesion.php" class="usuario"><?php
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    echo "Cerrar la Sesión: " . $_SESSION['username'] ;
                } else {

                }
            ?></a>     
        </div>
        <div class="divgrande">
            <div class="divpequeño">
                <h1>¿QUÉ PIENSAS?</h1>
            </div>
            <form action="crearcomentario.php" method="post">
                <div class="general">
                    
                    <div class="comentario">
                        <label for="comentario">Comentario</label>
                        <input type="text" id="comentario" name="comentario">
                    </div>
                </div>
                <div id="botones">
                    <div class="entrar">
                        <button type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>

        <?php
        include 'getcomentarios.php';
        ?>

<a href="#inicio" class="botoninicio"><img class="centrar" src="../inicio/IMG/arrow-up.png"></a>
<script src="js/comunidad.js"></script>
</body>
</html>