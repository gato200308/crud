<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $plataforma = $_POST['plataforma'];
    $fecha_lanzamiento = $_POST['fecha_lanzamiento'];

    $sql = "INSERT INTO juegos (nombre, descripcion, plataforma, fecha_lanzamiento) 
            VALUES ('$nombre', '$descripcion', '$plataforma', '$fecha_lanzamiento')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo videojuego creado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="POST">
    Nombre: <input type="text" name="nombre" required><br>
    Descripción: <textarea name="descripcion" required></textarea><br>
    Plataforma: <input type="text" name="plataforma" required><br>
    Fecha de Lanzamiento: <input type="date" name="fecha_lanzamiento" required><br>
    <input type="submit" value="Agregar Videojuego">
</form>
