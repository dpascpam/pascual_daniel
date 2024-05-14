<?php

            $servername = "localhost";
            $username = "InfoRM";
            $password = "Marcos2005";
            $database = "proyecto_final";

            // Intenta establecer una conexión a la base de datos
            $conn = new mysqli($servername, $username, $password, $database);

            // Verifica si hay errores en la conexión
            if ($conn->connect_error) {
                // Lanza una excepción con un mensaje de error
                throw new Exception("La conexión a la base de datos falló: " . $conn->connect_error);
            }

            echo '<section class="mensajes">';
            $qcomentarios  = $conn->query("SELECT usuario,comentario FROM comentarios");
            while($row=$qcomentarios->fetch_assoc()){
                echo '<div class="mensaje">';
                echo '<p>'.$row['usuario'].' Comentó:</p>';
                echo '<p>'.$row['comentario'].'</p>';
                echo '</div>';
            }
            echo '</section>';



