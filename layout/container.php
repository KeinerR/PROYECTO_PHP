<?php
// Determinar qué contenido cargar
$page = isset($_GET['page']) ? $_GET['page'] : 'main'; // Por defecto carga la página principal

// Incluir el archivo correspondiente
switch ($page) {
    case 'form':
        include 'views/form.php';
        break;
    case 'actividades':
        include 'views/actividades.php';
        break;
    default:
        include 'views/main.php';
        break;
}
?>