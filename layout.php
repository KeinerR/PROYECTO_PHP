<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aurora</title>
    <link rel="stylesheet" type="text/css" href="Access/css/style.css"> <!-- Estilo CSS -->
    <link rel="icon" href="Access/Img/Icono.jpeg" type="image/jpeg"> <!-- Icono de la pestaña -->
</head>
<body>
    <?php include 'Layout/header.php'; ?> <!-- Incluye el encabezado -->
    
    <div class="container">
        <?php include 'Layout/container.php'; ?> <!-- Incluye el contenido dinámico -->
    </div>
    
    <?php include 'Layout/footer.php'; ?> <!-- Incluye el pie de página -->

</body>
</html>