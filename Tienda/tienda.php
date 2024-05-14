<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Real Madrid CF</title>
    <link rel="stylesheet" href="../Tienda/csstienda/style.css">
    <link rel="icon" href="../InicioYNoticias/imgs/IconoRealMadrid.png">
    <link rel="icon" href="../imgs/IconoRealMadrid.png">
</head>
<body>
    
    <header>
        <div class="barra" id="inicio">
            <a href="../inicio/inicio.php">Noticias</a>
            <a href="../jugadores/jugadores.php">Jugadores</a>
            <a href="../Palmares/palmares.php">Palmarés</a>
            <a href="../santiago bernabeu/bernabeu.php">Santiago Bernabéu</a>
            <a href="#tienda">Tienda</a>
            <a href="../comunidad/comunidad.php">Comunidad</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>   
            <a href="../cerrar_sesion.php" class="usuario"><?php
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    echo "Cerrar la Sesión: " . $_SESSION['username'] ;
                } else {
                    // Si el usuario no ha iniciado sesión, puedes redirigirlo a la página de inicio de sesión o mostrar un mensaje
                    // header("Location: login.php");
                    // exit();
                }
            ?></a> 
            <div class="menuresponsive">
                <!-- Aquí se mostrarán los enlaces de la barra de navegación en dispositivos pequeños -->
            </div>
        </div>

        
    

        <div class="carrito">
            <div class="carritoiconocontenedor">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="iconocarrito">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>

            <div class="contador">
                <span id="contadorproductos">0</span>
            </div>
            </div>

            <div class="containercarritoproductos
            ocultarcarrito">
                <div class="carritoproductos">
                    <div class="infoproductocarrito">
                        <span class="cantidadproductocarrito"></span>
                        <p class="tituloproductocarrito"></p>
                        <span class="precioproductocarrito"></span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="iconoclose eliminarproducto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </div>

                <div class="carritototal">
                   <h3>Total:</h3> 
                   <span class="totalpagar"></span>
                </div>

            </div>
              
        </div>

    </header>
    

    <?php
        include 'getproductos.php';
    ?>


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

    <a href="#inicio" class="botoninicio"><img class="centrar" src="../Palmares/imgpalmares/arrow-up.png"></a>
    <script src="js/javascript.js"></script>

</body>
</html>