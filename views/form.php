<?php
// Este archivo solo muestra el formulario sin validación
?>
<div class = 'Formulario'>
    <h1>Formulario</h1>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Registrar</button>
    </form>
    <a href="layout.php?page=main">Ir a la Página Principal</a>
</div>