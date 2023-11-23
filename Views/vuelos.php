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

    
<?php
    $conexion = mysqli_connect("127.0.0.1", "root", "", "serviciodevuelos") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "insert into reserva(destino,ida,vuelta,aerolinea,cantpasajeros,dias) values 
                       ('$_REQUEST[destino]','$_REQUEST[ida]','$_REQUEST[vuelta]','$_REQUEST[aerolinea]','$_REQUEST[cantpasajeros]','$_REQUEST[dias]')")
        or die("Problemas en el select" . mysqli_error($conexion));

        $registros = mysqli_query($conexion, "select * from reserva ") or
       die("Problemas en el select:" . mysqli_error($conexion));
    
    
    
      while ($reg = mysqli_fetch_array($registros)) {
        echo "destino:" . $reg['destino'] . "<br>";
        echo "ida:" . $reg['ida'] . "<br>";
        echo "vuelta:" . $reg['vuelta'] . "<br>";
        echo "aerolinea:" . $reg['aerolinea'] . "<br>";
        echo "cantpasajeros:" . $reg['cantpasajeros'] . "<br>";
        echo "dias:" . $reg['dias'] . "<br>";
        echo "<hr>";
      }

    mysqli_close($conexion);

    ?>

<main class="main-planta"> 





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
=======
    <link rel="stylesheet" href="../Styles.css">
    <title>Document</title>
</head>
<body>
<header>
        <div class="container">
        <img src="views/logo.png" alt="Logo" height="50" width="50" style="margin-right: 10px;">
            <h1>Freedom</h1>
            <nav>
                <ul>
                    <li><a href="comentarios.php">Comentarios</a></li>
                    <li><a href="registro.php">Registro</a></li>
                    <li><a href="reserva.php">Reserva</a></li>
                    <li><a href="sugerenciasVuelos.php">Sugerencias de Vuelos</a></li>
                    <li><a href="vuelos.php">Vuelos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
       <h1>hola mundo</h1>
       <div class="containerT">
        <h2>Mis Vuelos</h2>

        

        <?php
        $conexion = new mysqli("127.0.0.1", "root", "", "nbd");

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }


        $consulta = "SELECT * FROM nbd";
        $resultados = $conexion->query($consulta);

        echo "<table class='tabV' border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Fecha</th>
                </tr>";

        while ($fila = $resultados->fetch_assoc()) {
            echo "<tr>
                    <td>" . $fila['id'] . "</td>
                    <td>" . $fila['nombre'] . "</td>
                    <td>" . $fila['origen'] . "</td>
                    <td>" . $fila['destino'] . "</td>
                    <td>" . $fila['fecha'] . "</td>
                </tr>";
        }

        echo "</table>";
        $conexion->close();
        ?>

    </div>
    </main>
    <footer>
        <div class="containerFooter">
            <p>&copy; <?php echo date("Y"); ?> Freedom. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>





<?php
/*class TaskView {
    public function render ($tasks){
        echo "<ul>";
        foreach ($tasks as $task){
            echo "<li>$task</li>";
        }
        echo "</ul>";
    }
}*/
?>
>>>>>>> 0f0a767d12632dd6b4544a3539efdb0ad34825cc
