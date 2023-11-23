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

</head>
<body class="body-reserva-viaje">

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
<form action="vuelos.php">
<section class="form-register">
    <h4>Seleccione su Vuelo</h4>
    <label for="fecha" >¿Vuelos desde Bs As A donde Quieres Ir? </label><br> <br>
    <select  name="destino" class="controls" >
     <option value="new">New York</option>
     <option value="rio">Rio de Janeriro</option>
     <option value="madrid">Madrid</option>
     <option value="miami">Miami</option>
     <option value="bariloche">San Carlos de Bariloche</option>
     <option value="jujuy">Jujuy</option>
     <option value="cancun">Cancun</option>
     <option value="punta">Punta Cana</option>
     <option value="mendoza">Mendoza</option>
     <option value="barcelona">Barcelona</option>
     <option value="cordoba">Cordoba</option>
     <option value="salta">Salta</option>
     <option value="roma">Roma</option>
    </select>  
    <!-- <input class="controls" type="text" name="origen" id="origen" placeholder="(Bue) Buenos Aires, Argentina">
    <input class="controls" type="text" name="destino" id="destino" placeholder="MDZ Mendoza, Argentina"> -->
    <input class="controls" type="date" name="ida" id="fecha" placeholder="DD/MM/MMMM  Ida">
    <input class="controls" type="date" name="vuelta" id="Fecha" placeholder="DD/MM/MMMM Vueta">
    <select  name="aerolinea" class="controls" style="margin-right: 10px;">
        <option value="aerolinea">Aerolineas Argentina</option>
        <option value="flybondi">Flybondi</option>
        <option value="latam">Latam</option>
        <option value="jet">Jet Smart</option>
    <input class="controls" type="number" name="cantpasajeros" id="pasajero" placeholder="Cantidad de pasajeros">
      <input class="controls" type="number" id="cantidad" name="dias" placeholder="Cantidad de Dias" data-input style="margin-right: 25px;"> 
      <button class="botons">RESERVAR</button> 
    </form> 
    <br>
    <p>Tu vuelo de ida sale de<a href="https://maps.app.goo.gl/KRuV19EjMSAtuAp86" class="direccion">Aeroparque Internacional Jorge Newbery</a></p> <br>
    <!-- <input class="botons" type="submit" value="Calcular Precio de Vuelo"> -->
    <p><a href="">¿Ya tengo Cuenta? </a></p>
    <p><a href="">Registrarse </a></p>
  </section>
 <br> <br> <br> <br> <br>
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