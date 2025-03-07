<?php
include 'db.php';

$sql = "SELECT * FROM juegos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Plataforma</th><th>Fecha de Lanzamiento</th><th>Acciones</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["nombre"]."</td>
                <td>".$row["descripcion"]."</td>
                <td>".$row["plataforma"]."</td>
                <td>".$row["fecha_lanzamiento"]."</td>
                <td><a href='update.php?id=".$row["id"]."'>Actualizar</a> | <a href='delete.php?id=".$row["id"]."'>Eliminar</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No hay videojuegos registrados.";
}
?>
