<?php
try {
    // Conexión sin base de datos (para crearla)
    $pdo = new PDO('mysql:host=localhost', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Crear base de datos "aurora"
    $pdo->exec("CREATE DATABASE IF NOT EXISTS aurora CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");
    echo "Base de datos 'aurora' creada correctamente.<br>";

    // Usar base de datos "aurora"
    $pdo->exec("USE aurora");

    // Tabla: Rol_Usuario
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS Rol_Usuario (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(50) NOT NULL
        )
    ");

    // Tabla: Usuarios
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS Usuarios (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(100) NOT NULL,
            email VARCHAR(100) UNIQUE NOT NULL,
            contraseña VARCHAR(255) NOT NULL,
            rol_id INT,
            FOREIGN KEY (rol_id) REFERENCES Rol_Usuario(id)
        )
    ");

    // Tabla: Nivel_Actividades
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS Nivel_Actividades (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nivel VARCHAR(50) NOT NULL
        )
    ");

    // Tabla: Actividades
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS Actividades (
            id INT AUTO_INCREMENT PRIMARY KEY,
            titulo VARCHAR(100) NOT NULL,
            descripcion TEXT,
            nivel_id INT,
            usuario_id INT,
            FOREIGN KEY (nivel_id) REFERENCES Nivel_Actividades(id),
            FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
        )
    ");

    // Tabla: Mensaje_Contactos
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS Mensaje_Contactos (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(100) NOT NULL,
            email VARCHAR(100),
            mensaje TEXT NOT NULL,
            fecha DATETIME DEFAULT CURRENT_TIMESTAMP
        )
    ");

    echo "Todas las tablas fueron creadas correctamente.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
