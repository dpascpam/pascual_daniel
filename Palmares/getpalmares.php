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
            
            echo '<div class="centrar">';
            $qtrofeos = $conn->query("SELECT foto, nombre, años FROM palmares");
            while($row=$qtrofeos->fetch_assoc()){
                echo '<div class="copa">';
                echo '<div class="imgytexto">';
                echo '<img src="'.$row['foto'].'" class="imgcopa">';
                echo '<div class="textos">';
                echo '<h2 class="textoprincipal">'.$row['nombre'].'</h2>';
                echo '<p class="textosecundario">'.$row['años'].'</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';