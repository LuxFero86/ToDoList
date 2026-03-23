<?php

namespace App\Service;

use App\Entity\Task;
use App\Repository\TaksRepository;
use App\Repository\TaskRepository;

class TaskService {

    // Attributes
    private TaskRepository $taskRepository;

    // Constructor
    public function __construct() {
        $this->taskRepository = new TaskRepository();
    }

    // Methods

}

?>