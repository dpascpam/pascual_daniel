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

            
            
            
            echo '<div class="contenido">';
            $qproducto = $conn->query("SELECT foto, producto, precio FROM productos");
            $contador = 1;
            while ($row = $qproducto->fetch_assoc()) {
                echo '<div class="producto">';
                echo '<figure>';
                echo '<img src="'.$row['foto'].'" alt="producto">';
                echo '<figure>';
                echo '<div class="infoproducto" datoproductoid="'.$contador.'">'; 
                echo '<h2>'.$row['producto'].'</h2>';
                echo '<p class="precio">'.$row['precio'].'</p>';
                echo '<button class="agregarcarrito">Añadir al carrito</button>';
                echo '</div>';
                echo '</div>';
                $contador++; // Incrementamos el contador
            }
            echo '<div class="carritomostrar"></div>';


            echo '</div>';
