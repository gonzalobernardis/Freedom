<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="container">
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