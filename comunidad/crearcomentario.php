<?php
            session_start();
            
            // Configuración de la conexión a la base de datos
            $servername = "localhost";
            $username = "InfoRM";
            $password = "Marcos2005";
            $database = "proyecto_final";

            try {
                // Intenta establecer una conexión a la base de datos
                $conn = new mysqli($servername, $username, $password, $database);
            
                // Verifica si hay errores en la conexión
                if ($conn->connect_error) {
                    // Lanza una excepción con un mensaje de error
                    throw new Exception("La conexión a la base de datos falló: " . $conn->connect_error);
                }
            
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Obtiene el nombre de usuario de la sesión en lugar de $_POST
                    $usuario = $_SESSION['username'];
                    $comentario = $_POST['comentario'];
            
                    // Consulta para obtener el ID del usuario
                    $sql = "SELECT id FROM comentarios WHERE usuario='".$usuario."'";
                    $result = $conn->query($sql);
                    
                    // Inserta el comentario
                    $sql = "INSERT INTO comentarios (usuario, comentario) VALUES ('".$usuario."','".$comentario."')";
                    $result = $conn->query($sql);
            
                    // Vuelve a consultar para obtener el ID del comentario insertado
                    $sql = "SELECT id FROM comentarios WHERE usuario='".$usuario."'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $_SESSION['id'] = $row['id'];
                    header("Location: comunidad.php");
                }
            
                // Cierra la conexión
                $conn->close();
            } catch (Exception $e) {
                // Captura cualquier excepción y muestra un mensaje de error
                echo "Error: " . $e->getMessage();
            }