<!DOCTYPE html>
<html lang="en">
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

</body>
</html>
