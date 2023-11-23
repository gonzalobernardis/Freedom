<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel="stylesheet" href="../Styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


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
            <img src="views/vacaciones4.jpg" class="d-block w-100" alt="..." width="50" height="350">
          </div>
          <div class="carousel-item">
            <img src="views/vacaciones5.jpg" class="d-block w-100" alt="..." width="50" height="350">
          </div>
          <div class="carousel-item">
            <img src="views/vacaciones6.jpg" class="d-block w-100" alt="..." width="50" height="350">
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

  <div id='calendar' class="div-form-reserva">
    
    <a href="reservadatos.php" class="">¿Vuelos desde Bs As A donde Quieres Ir?  </a>
  </div>



  <div>
    <img src="views/aerolineas.png" alt="">
  </div>

  <div>
    <img class="img-hoteles" src="views/hoteles.png" alt="">
  </div>
</main>

<footer>
  <div class="containerFooter-reserva">
        <div> &copy; <?php echo date("Y"); ?> Freedom. Todos los derechos reservados.</div>
      <ul class="iconos-footer">
        <a href="https://www.instagram.com/" target="_blank">   
        <li class="instagram"> <img src="views/instagram.png" alt="Instagram" data-input style="margin-right: 5px;">  </li></a>
        <a href="https://www.facebook.com" target="_blank">
        <li class="facebook"> <img src="views/facebook.png" alt="Facebook" data-input style="margin-right: 5px;"></li></a>
        <a href="https://web.whatsapp.com/" target="_blank">
        <li class="facebook"> <img src="views/whatsapp.png" alt="whatsapp" data-input style="margin-right: 5px;"></li></a>
        <a href="https://www.youtube.com/" target="_blank">
        <li class="facebook"> <img src="views/youtube.png" alt="youtube" data-input style="margin-right: 5px;"></li></a>
      </ul>
  </div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>