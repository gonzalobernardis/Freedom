<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <div class="container">
        <img src="views/logo.png" alt="Logo" height="50" width="50" style="margin-right: 10px;">
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

        echo "<table border='1'>
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

.containerT {
    max-width: 800px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
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
</style>



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