<?php
    $server = "localhost";
    $nombre_base_de_datos = "alonne";
    $usuario = "root";
    $contraseña = "";
    try {
        return new PDO('mysql:host='.$server.';dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
    } catch (Exception $e) {
        echo "Ocurrió algo con la base de datos: " . $e->getMessage();
    }
?>