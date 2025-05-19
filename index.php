<?php

require_once 'setup/create_database.php';

session_start(); // <- Esto es lo que te falta
header('location: login.php'); // <- Redirigir a login.php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? 'login.php';

    if (!empty($username)) {
        $_SESSION['user'] = $username; // <- Guardar el usuario en la sesión
        header("Location: layout.php?page=main"); // Redirigir
        exit;
    } else {
        echo "Por favor, ingresa un nombre de usuario.";
    }
}
?>
