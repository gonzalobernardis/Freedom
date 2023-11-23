<?php
include 'C:\xampp\htdocs\mvc-clase2\Freedom\Controller\controlador.php';

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
