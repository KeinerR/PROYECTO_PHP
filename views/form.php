<div class = 'Formulario'>
    <h1>Formulario</h1>
    <form>
      <label for="nombres">Nombres:</label>
      <input type="text" id="nombres" name="nombres" required>

      <label for="apellidos">Apellidos:</label>
      <input type="text" id="apellidos" name="apellidos" required>

      <label for="tipoDocumento">Tipo de documento:</label>
      <select id="tipoDocumento" name="tipoDocumento" required>
        <option value="">Seleccione</option>
        <option value="CC">Cédula de ciudadanía</option>
        <option value="TI">Tarjeta de identidad</option>
        <option value="CE">Cédula de extranjería</option>
      </select>

      <label for="numeroDocumento">Número de documento:</label>
      <input type="number" id="numeroDocumento" name="numeroDocumento" required>

      <label for="telefono">Teléfono:</label>
      <input type="tel" id="telefono" name="telefono" required>

      <label for="email">Correo electrónico:</label>
      <input type="email" id="email" name="email" required>

      <button type="submit">Enviar datos</button>
</form>
    <a href="layout.php?page=main">Ir a la Página Principal</a>
</div>