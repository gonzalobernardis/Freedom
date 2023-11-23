<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel='stylesheet' type='text/css' href='fullcalendar.css' />
<script type='text/javascript' src='jquery.js'></script>
<script type='text/javascript' src='fullcalendar.js'></script>
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
      <p>&copy; <php echo date("Y") ?> Freedom. Todos los derechos reservados.</p>
  </div>

</footer>





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

.img-fondreserva{
  width: 900px;
  height: 400px;
  margin-top: 15px;
  margin-bottom: 15px;
  
}

.img-fondreserva img{
  width: 100%;
  
}


.main-reserva{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  
}

.form-reserva{
  padding-bottom: 20px;
}

.img-hoteles{
  margin-bottom: 25px;
}


 /* Estilos básicos para el calendario */
 table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: center;
    }

    th {
      background-color: #f2f2f2;
    }

    td:hover {
      background-color: #e6e6e6;
    }
</style>

<script>
  
  $(function() {

// page is now ready, initialize the calendar...

$('#calendar').fullCalendar({
  // put your options and callbacks here
})

});
</script>

</body>
</html>