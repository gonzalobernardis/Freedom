<?php
class TaskModel {
    private $tasks = [];

    public function getAllTasks(){
        return $this -> tasks;
    }

    public function addTask($task){
        $this -> tasks [] = $task;
    }
}

?>