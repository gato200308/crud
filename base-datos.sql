CREATE DATABASE videojuegos;

USE videojuegos;

CREATE TABLE juegos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    plataforma VARCHAR(50),
    fecha_lanzamiento DATE
);
