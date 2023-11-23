<?php
<<<<<<< HEAD
include 'C:\xampp\htdocs\parcPortal\Freedom\Controller\controlador.php';
=======
include 'C:\xampp\htdocs\parcial2\Freedom\Controller\controlador.php';
>>>>>>> 20ac1bc1b5e4bf95a6864828e4958412ad532bd0

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
