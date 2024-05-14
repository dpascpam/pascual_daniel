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

            echo '<section class="noticias" id="noticias">';
            $qnoticias  = $conn->query("SELECT foto,titular FROM noticias");
            while($row=$qnoticias->fetch_assoc()){
                echo '<div class="noticia">';
                echo '<img src="'.$row['foto'].'" class="fotonoticia">';
                echo '<h2 class="titular">'.$row['titular'].'</h2>';
                echo '</div>';
            }
            echo '</section>';
