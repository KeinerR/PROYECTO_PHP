<div class="Ejercicios">
    <h2>Lista de Actividades</h2>

    <table>
        <tr>
            <th>Actividad</th>
            <th>Nivel</th>
            <th>Descripción</th>
            <th>Tiempo de ejecución</th>
        </tr>
        <?php
        $actividades = [
            ['actividad' => 'Meditación guiada', 'nivel' => 'Básico', 'descripcion' => 'Sesión guiada para enfocar la mente y relajar el cuerpo', 'tiempo' => '15 minutos'],
            ['actividad' => 'Respiración consciente', 'nivel' => 'Básico', 'descripcion' => 'Ejercicio de respiración profunda y pausada', 'tiempo' => '10 minutos'],
            ['actividad' => 'Baño de sonido', 'nivel' => 'Intermedio', 'descripcion' => 'Uso de cuencos tibetanos para alinear la energía', 'tiempo' => '30 minutos'],
            ['actividad' => 'Escritura introspectiva', 'nivel' => 'Avanzado', 'descripcion' => 'Reflexión escrita sobre emociones y pensamientos', 'tiempo' => '20 minutos'],
            ['actividad' => 'Caminata consciente', 'nivel' => 'Intermedio', 'descripcion' => 'Paseo en silencio, prestando atención plena al entorno', 'tiempo' => '25 minutos']
        ];

        foreach ($actividades as $actividad) {
            echo "<tr>";
            echo "<td>{$actividad['actividad']}</td>";
            echo "<td>{$actividad['nivel']}</td>";
            echo "<td>{$actividad['descripcion']}</td>";
            echo "<td>{$actividad['tiempo']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
