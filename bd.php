<?php
$servername = "localhost"; // o la IP del servidor
$username = "root"; // tu usuario de la base de datos
$password = ""; // tu contraseña de la base de datos
$dbname = "videojuegos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
