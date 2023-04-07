<?php
include 'model/TaskProvider.php';
include 'model/User.php';
session_start();

$pageHeader = 'Задачи';

$userName = null;
if (isset($_SESSION['user'])) {
    $userName = $_SESSION['user']->getUsername();
}else {
    //Перенаправим на главную если пользователь не залогинен
    header("Location: /");
    die();
}


$taskProvider = new TaskProvider();
if (isset($_GET['action']) && $_GET['action'] === 'add') {
    var_dump($_GET['action']);
    $taskText = strip_tags($_POST['task']);
//    $priority = (int)$_POST['priority'];
    $task = new Task($taskText);
    $taskProvider->setTask($task);
    header('Location: /?controller=tasks');
    die();
}

if (isset($_GET['action']) && $_GET['action'] === 'done') {
    $key = $_GET['key'];
    $taskProvider->setIsDoneTask($key);
    header('Location: /?controller=tasks');
    die();
}
if (isset($_GET['action']) && $_GET['action'] === 'delete') {
    $key = $_GET['key'];
    $taskProvider->deleteTask($key);
    header('Location: /?controller=tasks');
    die();
}
$tasks = $taskProvider->getUndoneList();
$tasksIsDone = $taskProvider->getIsDoneList();

include 'view/tasks.php';