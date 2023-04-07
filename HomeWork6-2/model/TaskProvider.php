<?php
include 'Task.php';
class TaskProvider
{
    private array $tasks;

    public function __construct() {
        $this->tasks = $_SESSION['tasks'] ?? [];
    }

    public function getUndoneList(): array
    {
        $tasks = [];
        foreach ($this->tasks as $key => $task) {
            if(!$task->getIsDone()) {
                $tasks[$key] = $task;
            }
        }
        return $tasks;
    }
    public function getIsDoneList(): array
    {
        $tasks = [];
        foreach ($this->tasks as $key => $task) {
            if($task->getIsDone()) {
                $tasks[$key] = $task;
            }
        }
        return $tasks;
    }
    public function setTask(Task $task): void
    {
       $this->tasks[] = $task;
       $_SESSION['tasks'][] = $task;

    }
    public function setIsDoneTask(int $key): void
    {
        $_SESSION['tasks'][$key]->setIsDone();
        $this->tasks[$key]->setIsDone();
    }
    public function deleteTask(int $key): void
    {
        unset($_SESSION['tasks'][$key]);
        unset($this->tasks[$key]);
    }
    public function setDescription($task): void
    {
        $this->tasks = $task;
    }
    public function getDescription(): array
    {
       return $this->tasks;
    }
}