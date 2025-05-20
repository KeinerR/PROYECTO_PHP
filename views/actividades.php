<?php
require_once 'ActividadesModel.php'; // Asegúrate de que la ruta es correcta
$actividadModel = new ActividadesModel();
$actividades = $actividadModel->getAll(); // Obtener datos reales desde la base
?>

<div class="Ejercicios">
    <h2>Lista de Actividades</h2>

    <table>
        <tr>
            <th>Actividad</th>
            <th>Nivel</th>
            <th>Descripción</th>
            <th>Tiempo de ejecución</th>
        </tr>
        <?php foreach ($actividades as $actividad): ?>
            <tr>
                <td><?= htmlspecialchars($actividad['nombre']) ?></td>
                <td><?= htmlspecialchars($actividad['nivel_nombre']) ?></td>
                <td><?= htmlspecialchars($actividad['descripcion']) ?></td>
                <td><?= htmlspecialchars($actividad['tiempo_estimado']) ?> minutos</td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
