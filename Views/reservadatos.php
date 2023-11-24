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
    <main>
<form action="vuelos.php">
<section class="form-register">
    <h4>Seleccione su Vuelo</h4>
    <label for="fecha" >¿Vuelos desde Bs As A donde Quieres Ir? </label><br> <br>
    <select  name="destino" class="controls" required>
     <option value="bariloche">San Carlos de Bariloche</option>
     <option value="jujuy">Jujuy</option>
     <option value="mendoza">Mendoza</option>
     <option value="cordoba">Cordoba</option>
     <option value="salta">Salta</option>
    </select>  
    <!-- <input class="controls" type="text" name="origen" id="origen" placeholder="(Bue) Buenos Aires, Argentina">
    <input class="controls" type="text" name="destino" id="destino" placeholder="MDZ Mendoza, Argentina"> -->
    <input class="controls" type="date" name="ida" id="fecha" placeholder="DD/MM/MMMM  Ida"required>
    <input class="controls" type="date" name="vuelta" id="Fecha" placeholder="DD/MM/MMMM Vueta"required>
    <select  name="aerolinea" class="controls" style="margin-right: 10px;" required>
        <option value="aerolinea">Aerolineas Argentina</option>
        <option value="flybondi">Flybondi</option>
        <option value="latam">Latam</option>
        <option value="jet">Jet Smart</option>
    <input class="controls" type="number" name="cantpasajeros" id="pasajero" placeholder="Cantidad de pasajeros"required>
      <input class="controls" type="number" id="cantidad" name="dias" placeholder="Cantidad de Dias" data-input style="margin-right: 25px;"required> 
      <button class="botons">RESERVAR</button> 
    </form> 
    <br>
    <p>Tu vuelo de ida sale de <a href="https://maps.app.goo.gl/KRuV19EjMSAtuAp86" class="direccion">Aeroparque Int. Jorge Newbery</a></p> <br>
    <p><a href="">¿Ya tengo Cuenta? </a></p>
    <p><a href="">Registrarse </a></p>
  </section>
 <br> <br> <br> <br> <br>

 </main>
 <footer>
        <div class="containerFooter">
            <p>&copy; <?php echo date("Y"); ?> Freedom. Todos los derechos reservados.</p>
        </div>
    </footer>