<?php
$name = readline("Как Вас зовут? ");
$age = (int)readline("Сколько Вас лет? ");
$task1 = readline("Какая задача стоит перед Вами сегодня? ");
$time = (int)readline("Сколько примерно времени эта задача займет? ");
$task2 = readline("Какая задача стоит перед Вами сегодня? ");
$time2 = (int)readline("Сколько примерно времени эта задача займет? ");
$task3 = readline("Какая задача стоит перед Вами сегодня? ");
$time3 = (int)readline("Сколько примерно времени эта задача займет? ");

$timeAll = $time + $time2 + $time3;

echo "Вас зовут $name, Вам $age лет\n";
echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:
- $task1 (${time}ч)
- $task2 (${time2}ч)
- $task3 (${time3}ч)
Примерное время выполнения плана = ${timeAll}ч\n";