<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles.css">
    <title>Document</title>
</head>
<body>
<header>
        <div class="containerIndex">
            <img src="logo.png" alt="Logo" height="50" width="50" style="margin-right: 10px;">
            <h1>Freedom</h1>
            <nav>
                <ul>
                    <li><a href="../Index.php">Inicio</a></li>
                    <li><a href="comentarios.php">Comentarios</a></li>
                    <li><a href="registro.php">Registro</a></li>
                    <li><a href="reserva.php">Reservá</a></li>
                    <li><a href="sugerenciasVuelos.php">Sugerencias de Vuelos</a></li>
                    <li><a href="vuelos.php">Tus Vuelos</a></li>
                </ul>
            </nav>
        </div>
</header>
<main class="mainregistro">
    <div class="caja">
        <form method="post" action="" class="formulario">
            <label for="nombre" class="comment">Nombre:</label>
            <input type="text" name="nombre" placeholder="Escribe tu nombre">

            <label for="apellido" class="comment">Apellido:</label>
            <input name="apellido" class="" placeholder="Escribe tu apellido" maxlength="20">

            <label for="documento" class="comment">Documento:</label>
            <input type="number" name="documento" placeholder="Escribe tu documento">

            <label for="email" class="comment">Email:</label>
            <input type="text" name="email" placeholder="Escribe tu email">

            <label for="telefono" class="comment">Telefono:</label>
            <input type="number" name=" telefono" placeholder="Escribe tu numero de telefono">
            <button type="submit" class="boton">Enviar</button>
        </form>

</main>
<footer>
        <div class="containerFooter">
            <p>&copy; <?php echo date("Y"); ?> Freedom. Todos los derechos reservados.</p>
        </div>
</footer>
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
