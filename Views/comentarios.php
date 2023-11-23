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
<main class="maincomment">
    <div class="caja">
        <form method="post" action="comentario.php" class="formulario">
            <label for="nombre" >Nombre:</label>
            <input type="text" name="nombre" placeholder="Escribe tu nombre">

            <label for="comentario" class="comment">Comentario:</label>
            <textarea name="comentario" class="input-comment" placeholder="Deja tu comentario" maxlength="500"></textarea>

            <button type="submit" class="boton">Agregar Comentario</button>
        </form>


        <h1>Comentarios</h1>
        <div id="comentarios">
            <?php
            foreach ($comentarios as $comentario) {
                echo "<p>{$comentario['nombre']}: {$comentario['comentario']}</p>";
            }
            ?>
        </div>
    </div>




</main>
<footer>
        <div class="containerFooter">
            <p>&copy; <?php echo date("Y"); ?> Freedom. Todos los derechos reservados.</p>
        </div>
</footer>

</body>
</html>
