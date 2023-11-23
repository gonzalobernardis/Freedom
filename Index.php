<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freedom</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="containerIndex">
        <img src="views/logo.png" alt="Logo" height="50" width="50" style="margin-right: 10px;">
            <h1>Freedom</h1>
            <nav>
                <ul>
                    <li><a href="views/comentarios.php">Comentarios</a></li>
                    <li><a href="views/registro.php">Registro</a></li>
                    <li><a href="views/reserva.php">Reservá</a></li>
                    <li><a href="views/sugerenciasVuelos.php">Sugerencias de Vuelos</a></li>
                    <li><a href="views/vuelos.php">Tus Vuelos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
    <?php
include 'C:\xampp\htdocs\mvc-clase2\Controller\controlador.php';

$model = new TaskModel();
$view = new TaskView();
$controller = new TaskController($model,$view);

//agregar tareas al modelo
$controller->addTask("Plancharme el pelo");
$controller->addTask("Comprar comida para Mishi");
$controller->addTask("Comprar chocolate");

// Mostrar tareas en la vista
$controller->showTasks();

?>
    </main>
    <footer>
        <div class="containerFooter">
            <p>&copy; <?php echo date("Y"); ?> Freedom. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
</body>
</html>
