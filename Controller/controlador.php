<?php
include 'C:\xampp\htdocs\parcPortal\Freedom\Models\modelo.php';
class TaskController {
    private $model;
    private $view;

    public function __construct($model, $view)
    {
        $this -> model = $model;
        $this -> view = $view;
    }

    public function addTask($task){
        $this -> model -> addTask ($task);
    }

    public function showTasks (){
        $tasks = $this -> model -> getAllTasks();
        $this -> view -> render ($tasks);
    }
}
include 'C:\xampp\htdocs\parcPortal\Freedom\Views\vuelos.php';

?>