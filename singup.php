<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="icon" href="Access/Img/Icono.jpeg" type="image/jpeg"> <!-- Icono de la pestaña -->
    <link rel="stylesheet" type="text/css" href="Access/css/style.css">
</head>
<body class = 'Contenido-signup'>
        <div id = 'signup-container'>
            <h1 id = 'text-signup'>Registrarse</h1>
            <form class = "signup-form">
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

                    <label for="usuarios">Nombre de Usuario:</label>
                    <input type="text" id="usuarios" name="usuarios" required>

                    <label for="password">Contraseña:</label>
                    <input type="text" id="password" name="password" required>

                    <button type="submit">Enviar datos</button>
            </form>
        </div>
        <a href='login.php'>Volver a inicio de sesión</a>
</body>
</html>