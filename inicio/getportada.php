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
            $qportada  = $conn->query("SELECT foto,titular FROM portada");
            while($row=$qportada->fetch_assoc()){
                echo '<div class="fotoI">';
                echo '<img class="fotobelli" src="'.$row['foto'].'">';
                echo '<h1 class="noticiabellingham">'.$row['titular'].'</h1>';
                echo '</div>';
            }    