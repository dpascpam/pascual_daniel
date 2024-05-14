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

            echo '<div class = "porteros" id="posicion">';
            echo '<h2>PORTEROS</h2>';

            $qportero  = $conn->query("SELECT nombre,dorsal,foto FROM jugadores WHERE id_posicion=1");
            while($row=$qportero->fetch_assoc()){
                echo '<div class="jugadores">';
                echo '<img class="fotojugador" src = "'.$row['foto'].'" alt="'.$row['nombre'].'">';
                echo '<h3 class="nombre">'.$row['dorsal'].". ".$row['nombre'].'</h3>';
                echo '</div>'; 
            }
            echo '</div><br>'; 
            
            echo '<div class = "defensas" id="posicion">';
            echo '<h2>DEFENSAS</h2>';
            $qdefensa  = $conn->query("SELECT nombre,dorsal,foto FROM jugadores WHERE id_posicion=2");
            while($row = $qdefensa->fetch_assoc()){
                echo '<div class="jugadores">';
                echo '<img class="fotojugador" src = "'.$row['foto'].'" alt="'.$row['nombre'].'">';
                echo '<h3 class="nombre">'.$row['dorsal'].". ".$row['nombre'].'</h3>';
                echo '</div>'; 
            }
            echo '</div><br>'; 

            echo '<div class = "mediocentros" id="posicion">';
            echo '<h2>MEDIOCENTROS</h2>';
            $qmediocentro  = $conn->query("SELECT nombre,dorsal,foto FROM jugadores WHERE id_posicion=3");
            while($row = $qmediocentro->fetch_assoc()){
                echo '<div class="jugadores">';
                echo '<img class="fotojugador" src = "'.$row['foto'].'" alt="'.$row['nombre'].'">';
                echo '<h3 class="nombre">'.$row['dorsal'].". ".$row['nombre'].'</h3>';
                echo '</div>'; 
            }
            echo '</div><br>'; 

            echo '<div class = "delanteros" id="posicion">';
            echo '<h2>DELANTEROS</h2>';
            $qdelantero  = $conn->query("SELECT nombre,dorsal,foto FROM jugadores WHERE id_posicion=4");
            while($row = $qdelantero->fetch_assoc()){
                echo '<div class="jugadores">';
                echo '<img class="fotojugador" src = "'.$row['foto'].'" alt="'.$row['nombre'].'">';
                echo '<h3 class="nombre">'.$row['dorsal'].". ".$row['nombre'].'</h3>';
                echo '</div>'; 
            }
            echo '</div>'; 