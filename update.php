<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM juegos WHERE id = $id";
    $result = $conn->query($sql);
    $juego = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $plataforma = $_POST['plataforma'];
    $fecha_lanzamiento = $_POST['fecha_lanzamiento'];

    $sql = "UPDATE juegos SET nombre='$nombre', descripcion='$descripcion', plataforma='$plataforma', fecha_lanzamiento='$fecha_lanzamiento' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Videojuego actualizado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="POST">
    Nombre: <input type="text" name="nombre" value="<?php echo $juego['nombre']; ?>" required><br>
    Descripción: <textarea name="descripcion" required><?php echo $juego['descripcion']; ?></textarea><br>
    Plataforma: <input type="text" name="plataforma" value="<?php echo $juego['plataforma']; ?>" required><br>
    Fecha de Lanzamiento: <input type="date" name="fecha_lanzamiento" value="<?php echo $juego['fecha_lanzamiento']; ?>" required><br>
    <input type="submit" value="Actualizar Videojuego">
</form>
