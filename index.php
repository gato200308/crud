<?php
include 'db.php';

// Obtener todos los videojuegos
$sql = "SELECT * FROM juegos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos - CRUD</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h1>Lista de Videojuegos</h1>

    <!-- Botón para ir a la página de agregar videojuego -->
    <a href="create.php">Agregar Nuevo Videojuego</a>

    <br><br>

    <?php
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Plataforma</th>
                    <th>Fecha de Lanzamiento</th>
                    <th>Acciones</th>
                </tr>";
        
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["nombre"]."</td>
                    <td>".$row["descripcion"]."</td>
                    <td>".$row["plataforma"]."</td>
                    <td>".$row["fecha_lanzamiento"]."</td>
                    <td>
                        <a href='update.php?id=".$row["id"]."'>Actualizar</a> | 
                        <a href='delete.php?id=".$row["id"]."'>Eliminar</a>
                    </td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No hay videojuegos registrados.</p>";
    }

    $conn->close();
    ?>

</body>
</html>
