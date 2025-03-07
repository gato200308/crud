<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM juegos WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Videojuego eliminado exitosamente.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
