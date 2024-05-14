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

            echo '<div>';
            echo '<h2 class="titulo2">Evolución</h2>';
            echo '</div>';

            $qbernabeu = $conn->query("SELECT foto,texto FROM evolucion");
            $total_rows = $qbernabeu->num_rows;
            $current_row = 0;

            while ($row = $qbernabeu->fetch_assoc()) {
                $current_row++;
                echo '<div class="container">';
                echo '<div class="imagen">';
                echo '<img class="imgs" src="' . $row['foto'] . '">';
                echo '</div>';
                echo '<div>';
                echo '<p class="textos">"' . $row['texto'] . '"</p>';
                echo '</div>';
                echo '</div>';

                if ($current_row < $total_rows) {
                    echo '<div class="flecha">';
                    echo '<img src="imgbernabeu/FlechaAbajo.png" class="flechaabajo">';
                    echo '</div>';
                }
            }
            echo '</div>';
