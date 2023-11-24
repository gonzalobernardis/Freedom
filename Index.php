<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freedom</title>
    <link rel="stylesheet" href="Styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<body>

    <header>
        <div class="containerIndex">
            <img src="views/logo.png" alt="Logo" height="50" width="50" style="margin-right: 10px;">
            <h1>Freedom</h1>
            <nav>
                <ul>
                    <li><a href="Views/comentarios.php">Comentarios</a></li>
                    <li><a href="views/registro.php">Registro</a></li>
                    <li><a href="views/sugerenciasVuelos.php">Sugerencias de Vuelos</a></li>
                    <li><a href="views/vuelos.php">Tus Vuelos</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-reserva">
        <div class="carrusel-inicio2">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="views/views/vacaciones4.jpg" class="d-block w-100" alt="..." width="50" height="350">
                    </div>
                    <div class="carousel-item">
                        <img src="views/views/vacaciones5.jpg" class="d-block w-100" alt="..." width="50" height="350">
                    </div>
                    <div class="carousel-item">
                        <img src="views/views/vacaciones6.jpg" class="d-block w-100" alt="..." width="50" height="350">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div> <br> <br> <br>
        <div class="info">

<div class="icon-container">
  <div class="icon">
    <img src="img/reserva.png" alt="Icono 1">
    <p>Si tiene inconvenientes con su vuelo, es responsabilidad de la aerolínea.</p>
  </div>

  <div class="icon">
    <img src="img/cuota.png" alt="Icono 2">
    <p>3 cuotas sin interés</p>
  </div>

  <div class="icon">
    <img src="img/18.png" alt="Icono 3">
    <p>Debe ser mayor de 18 años para realizar reservas.</p>
  </div>
</div>

</div>
        <div  class="div-form-reserva">
            <a href="Views/reservadatos.php" class="reservaYa">RESERVA TU VUELO </a>
        </div>
        <article class="suggestion">
            <img src="Img/bsas.jpg" alt="Lugar 1">
            <h3>Buenos Aires</h3>
            <p>Descubre la belleza de Buenos Aires con sus paisajes únicos y cultura fascinante. Pasea por sus coloridos barrios, disfruta de la deliciosa comida argentina y sumérgete en la vibrante vida nocturna. ¡Una experiencia inolvidable te espera!</p>
            <a href="reservadatos.php" class="btn">Ver Vuelos</a>
        </article>

        <article class="suggestion">
            <img  src="Img/Bariloche.jpg" alt="Lugar 2">
            <h3>Bariloche</h3>
            <p>Explora las maravillas naturales de Bariloche, un destino perfecto para los amantes de la aventura. Disfruta de sus impresionantes lagos, practica deportes de invierno en la nieve y relájate en un entorno natural espectacular. ¡Una escapada única te espera en Bariloche!</p>
            <a href="reservadatos.php" class="btn">Ver Vuelos</a>
        </article>
    </main>

    <footer>
        <div class="containerFooter">
            <p>&copy; <?php echo date("Y"); ?> Freedom. Todos los derechos reservados.</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>