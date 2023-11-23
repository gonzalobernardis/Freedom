<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <div class="container">
        <img src="views/logo.png" alt="Logo" height="50" width="50" style="margin-right: 10px;">
            <h1>Freedom</h1>
            <nav>
                <ul>
                    <li><a href="views/COMENTARIOS.php">Comentarios</a></li>
                    <li><a href="views/REGISTRO.php">Registro</a></li>
                    <li><a href="views/RESERVA.php">Reserva</a></li>
                    <li><a href="views/SUGERENCIASVUELOS.php">Sugerencias de Vuelos</a></li>
                    <li><a href="views/VUELOS.php">Vuelos</a></li>
                </ul>
            </nav>
        </div>
</header>
<main>
<form method="post" action="" class="formulario">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">

        <label for="comentario" class="comment">Comentario:</label>
        <textarea name="comentario"></textarea>

        <button type="submit" class="boton">Agregar Comentario</button>
</form>


<h1>Comentarios</h1>
    <div id="comentarios">
        <?php
        foreach ($comentarios as $comentario) {
            echo "<p>{$comentario['nombre']}: {$comentario['comentario']}</p>";
        }
        ?>o
    </div>



</main>
<footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Freedom. Todos los derechos reservados.</p>
        </div>
</footer>

</body>
</html>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: 0 auto;
    overflow: hidden;
    display: flex; 
    align-items: center; 
}
h1{
    padding-right: 5%;
}
header {
    padding: 20px 0;
    background-color: #26ade4; 
    color: #000000;
}
.formulario{
    display: flex;
    flex-direction: column;
    align-items: center;
}
.comment{
    margin-top: 1em
}
.boton{
    margin-top: 1em
}
nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;

}

nav a {
    text-decoration: none;
    font-weight: bold;
    font-size: 16px;
    color: #ffffff;
}
footer {
    text-align: center;
    background-color: #26ade4; 
    color: #000000; 
    padding: 20px 0;
}

footer p {
    margin: 0;
    font-size: 14px;
}
</style>