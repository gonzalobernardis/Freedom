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
                    <li><a href="sugerenciasVuelos.php">Sugerencias de Vuelos</a></li>
                    <li><a href="vuelos.php">Tus Vuelos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>



    <div class="containerT">
        <?php

        $conexion = mysqli_connect("127.0.0.1", "root", "", "serviciodevuelos") or
            die("Problemas con la conexión");

            if (isset($_REQUEST["aerolinea"])) {
                mysqli_query($conexion, "insert into reserva(destino,ida,vuelta,aerolinea,cantpasajeros,dias) values 
                                    ('$_REQUEST[destino]','$_REQUEST[ida]','$_REQUEST[vuelta]','$_REQUEST[aerolinea]','$_REQUEST[cantpasajeros]','$_REQUEST[dias]')")
                    or die("Problemas en el select" . mysqli_error($conexion));
            }
        

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }


        $consulta = "SELECT * FROM reserva";
        $resultados = $conexion->query($consulta);
        echo "<table class='tabV' border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>CantidadPasajeros</th>
                    <th>Dias</th>
                </tr>";

        while ($fila = $resultados->fetch_assoc()) {
            echo "<tr>
                    <td>" . $fila['destino'] . "</td>
                    <td>" . $fila['ida'] . "</td>
                    <td>" . $fila['vuelta'] . "</td>
                    <td>" . $fila['aerolinea'] . "</td>
                    <td>" . $fila['cantpasajeros'] . "</td>
                    <td>" . $fila['dias'] . "</td>
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