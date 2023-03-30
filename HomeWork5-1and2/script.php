<?php
require_once 'Task.php';
require_once 'User.php';
require_once 'TaskService.php';
require_once 'Comment.php';

$user1 = new Users('Zoia', 33);

$task1 = new Task($user1, 'Сделать домашнее задание', 1 );
$task2 = new Task($user1, 'Попить кофе', 2);

$comment1 = new Comment($user1,$task2,'Лучше попить чай');
$comment2 = new Comment($user1,$task2,'А еще лучше выпить вина');

TaskService::addComment($user1, $task2, $comment1->getText());
TaskService::addComment($user1, $task2, $comment2->getText());

print_r($task2);