<?php

require_once '../modelo/modelo.php';
require_once '../vista/vista.php';

class TaskController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new TaskModel();
        $this->view = new TaskView();
    }

    public function showTasks() {
        
        $tasks = $this->model->getTasks();
        
    
        return $this->view->showTasks($tasks);
    }
}


$taskController = new TaskController();
$taskController->showTasks();

?>
