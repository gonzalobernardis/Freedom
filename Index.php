<?php
include 'C:\xampp\htdocs\parcPortal\Freedom\Controller\controlador.php';

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