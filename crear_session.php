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
                
                $usuario = $_POST['usuario'];
                $clave = $_POST['clave'];

                $sql = "Select id from usuarios where nombre_usuarios='".$usuario."'";

                $result = $conn ->query($sql);
               
                
                if($result -> num_rows == 1){
                    header("location:crear_usuario.php?control=1");
                }else{
                    $sql = "Insert into usuarios (nombre_usuarios,contrasena) values ('".$usuario."','".$clave."')";
                    $result = $conn ->query($sql);

                    $sql = "Select id from usuarios where nombre_usuarios='".$usuario."'";
                    $result = $conn ->query($sql);
                    $row = $result ->fetch_assoc();
                    $_SESSION['id'] = $row['id'];

                    header("location: iniciosesion.php");
                }
            }
            $conn->close();
            } catch (Exception $e) {
            // Captura cualquier excepción y muestra un mensaje de error
            echo "Error: " . $e->getMessage();
            }

?>