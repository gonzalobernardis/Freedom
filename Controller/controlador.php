<?php
<<<<<<< HEAD
include 'C:\xampp\htdocs\parcPortal\Freedom\Models\modelo.php';
=======
<<<<<<< HEAD
include 'C:\xampp\htdocs\parcial2\Freedom\Models\modelo.php';
=======
include 'C:\xampp\htdocs\vuelos\Freedom\Models\modelo.php';
>>>>>>> a272e1be8e6a0353753548dddec2db80611b461c
>>>>>>> 20ac1bc1b5e4bf95a6864828e4958412ad532bd0
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
<<<<<<< HEAD
include 'C:\xampp\htdocs\parcPortal\Freedom\Views\vuelos.php';
=======
<<<<<<< HEAD
include 'C:\xampp\htdocs\parcial2\Freedom\Views\vuelos.php';
=======
include 'C:\xampp\htdocs\vuelos\Freedom\Views\vuelos.php';
>>>>>>> a272e1be8e6a0353753548dddec2db80611b461c
>>>>>>> 20ac1bc1b5e4bf95a6864828e4958412ad532bd0

?>