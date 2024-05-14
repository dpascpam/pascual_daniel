<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Real Madrid CF</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="icon" href="IMG/ESCUDOREALMADRID.png" type="image/x-icon">
</head>
<body>

<section class="portada">
    <div class="barra" id="inicio">
            <a href="#noticias">Noticias</a>
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

    <?php
        include 'getportada.php';
    ?>
</section>        
    <?php
        include 'getnoticias.php';
    ?>
        <br><br>



<a href="#inicio" class="botoninicio"><img class="centrar" src="IMG/arrow-up.png"></a>

<script src="../js/javascript.js"></script>
</body>
<section class="final" id="nosotros">
        <ul id="primera">
        <h2>Nosotros</h2>
        <p>Av/ Universidad, S/N, 28691 <br>Villanueva de la Cañada (Madrid)</p>
        </ul>


        <section class="final" id="enlaces">
            <ul>
                <h2>Enlaces de interés</h2>
                <p><a href="https://www.realmadrid.com/es-ES/legal/politica-de-privacidad" target="_blank">Política de privacidad</a></p>
                <p><a href="https://www.realmadrid.com/es-ES/legal/politica-de-cookies" target="_blank">Política de cookies</a></p>
                <p><a href="https://shop.realmadrid.com/content/terms-and-conditions" target="_blank">Términos y condiciones</a></p>
                <p><a href="https://www.realmadrid.com/es-ES/legal/aviso-legal" target="_blank">Aviso legal</a></p>
            </ul>
        </section>
    </section>
</html>