<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freedom</title>
    <link rel="stylesheet" href="../Styles.css">
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
                    <li><a href="sugerenciasVuelos.php">Sugerencias de Vuelos</a></li>
                    <li><a href="vuelos.php">Tus Vuelos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main >

        
        <article class="suggestion">
            <img src="../Img/bsas.jpg" alt="Lugar 1">
            <h3>Buenos Aires</h3>
            <p>Descubre la belleza de Buenos Aires con sus paisajes únicos y cultura fascinante. Pasea por sus coloridos barrios, disfruta de la deliciosa comida argentina y sumérgete en la vibrante vida nocturna. ¡Una experiencia inolvidable te espera!</p>
            <a href="reservadatos.php" class="btn">Ver Vuelos</a>
        </article>

        <article class="suggestion">
            <img  src="../Img/Bariloche.jpg" alt="Lugar 2">
            <h3>Bariloche</h3>
            <p>Explora las maravillas naturales de Bariloche, un destino perfecto para los amantes de la aventura. Disfruta de sus impresionantes lagos, practica deportes de invierno en la nieve y relájate en un entorno natural espectacular. ¡Una escapada única te espera en Bariloche!</p>
            <a href="reservadatos.php" class="btn">Ver Vuelos</a>
        </article>

        <article class="suggestion">
            <img src="../Img/Cordoba.jpg" alt="Lugar 3">
            <h3>Córdoba</h3>
            <p>Sumérgete en la rica historia y arquitectura de Córdoba, una ciudad llena de encanto. Explora sus antiguas iglesias, disfruta de la cultura local y maravíllate con la arquitectura colonial. ¡Córdoba te espera con los brazos abiertos!</p>
            <a href="reservadatos.php" class="btn">Ver Vuelos</a>
        </article>

        <article class="suggestion">
            <img src="../Img/Mendoza.jpg" alt="Lugar 4">
            <h3>Mendoza</h3>
            <p>Disfruta de la tranquilidad de Mendoza, un destino perfecto para relajarse y desconectar. Descubre sus viñedos, prueba los mejores vinos argentinos y disfruta de las impresionantes vistas de la cordillera de los Andes. ¡Mendoza te invita a una experiencia única!</p>
            <a href="reservadatos.php" class="btn">Ver Vuelos</a>
        </article>

    </main>
    <footer>
        <div class="containerFooter">
            <p>&copy; <?php echo date("Y"); ?> Freedom. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>

</html>



