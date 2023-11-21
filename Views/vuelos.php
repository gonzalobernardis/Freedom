<?php
class TaskView {
    public function render ($tasks){
        echo "<ul>";
        foreach ($tasks as $task){
            echo "<li>$task</li>";
        }
        echo "</ul>";
    }
}

?>