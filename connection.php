<?php

function connection() {
    $host = "localhost";  // Servidor de MySQL
    $user = "tailorsdev";       // Usuario de MySQL
    $pass = "*Tai2024*";           // Contraseña 
    $bd = "tailorsd_YeisonT_Mr_Coins";     // Nombre de la base de datos

    // Crear la conexión, especificando también la base de datos
    $connect = mysqli_connect($host, $user, $pass, $bd);

    // Verificar si la conexión fue exitosa
    if (mysqli_connect_errno()) {
        // Si hay error de conexión, muestra el mensaje y termina el script
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Si la conexión fue exitosa, retorna el objeto de conexión
    return $connect;
}

?>