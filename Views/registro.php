<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freedom - Registrarse</title>
    <link rel="stylesheet" href="../Styles.css">
</head>
<body>
    <h1>Registrarse</h1>
    <form class="formRegistrar" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="apellidos">Apellido:</label>
        <input type="text" id="apellidos" name="apellidos">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <label for="direccion">Direccion:</label>
        <input type="text" id="direccion" name="direccion">
        <label for="fechanacimiento">Fecha de nacimiento:</label>
        <input type="date" id="fechanacimiento" name="fechanacimiento">
        <label for="telefono">Telefono:</label>
        <input type="tel" id="telefono" name="telefono">
        <label for="nacionalidad">Nacionalidad:</label>
        <select name="nacionalidad" id="nacionalidad">
            <option value="Argentina">Argentina</option>
            <option value="Brasil">Brasil</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Chile">Chile</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Perú">Perú</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Colombia">Colombia</option>
            <option value="Ecuador">Ecuador</option>
        </select>
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>