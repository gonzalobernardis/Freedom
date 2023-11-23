<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel="stylesheet" href="../Styles.css">
</head>
<body>

  <header>
    <div class="container">
    <img src="views/logo.jpeg" alt="Logo" height="50" width="50" style="margin-right: 10px;">
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

<main class="main-reserva">
  <div>
  <img class="img-fondreserva" src="views/vacaciones3.jpg" alt="">
  </div>

  <div id='calendar'>
  <form action="#" class="form-reserva">
      <label for="fecha">Fecha seleccionada:</label>
      <input type="date" id="fecha" name="fecha" data-input>
      <button type="button" id="mostrarCalendario">Mostrar Calendario</button>   
  </form>
  </div>
  <div>
    <img src="views/aerolineas.png" alt="">
  </div>

  <div>
    <img class="img-hoteles" src="views/hoteles.png" alt="">
  </div>
</main>

<footer>
  <div class="container">
      <p>&copy; <?php echo date("Y");?> Freedom. Todos los derechos reservados.</p>
  </div>

</footer>



</body>
</html>