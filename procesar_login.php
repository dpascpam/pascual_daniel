<?php
session_start();

// Verificar si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos del formulario
    $usuario = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];

    // Configuración de la conexión a la base de datos
    $servername = "localhost";
    $username = "InfoRM";
    $password = "Marcos2005";
    $database = "proyecto_final";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    // Consulta para verificar las credenciales del usuario
    $sql = "SELECT id, nombre_usuarios FROM usuarios WHERE nombre_usuarios = '$usuario' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Iniciar sesión y redirigir al usuario
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['nombre_usuarios']; // Almacena el nombre de usuario en la sesión
        $_SESSION['loggedin'] = true; // Variable de sesión para indicar que el usuario ha iniciado sesión
        header("Location: inicio/inicio.php"); // Redirigir a la página de inicio
        exit();
    } else {
        // Credenciales incorrectas, mostrar mensaje de error
        echo "<h4>Usuario o contraseña incorrectos, vuelve atrás e intenta iniciar sesión de nuevo.</h4>";
        echo "<h4>Si el problema persiste y no es mucha molestia, cree un nuevo usuario.</h4>";
    }

    $conn->close();
}
?>