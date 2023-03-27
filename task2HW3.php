<?php
// Задание №2
$wishes = ['здоровья', 'терпения', 'богатства', 'воображения'];
$epithets = ['крепкого', 'космического', 'много', 'безудержного'];

$wishesRand = array_rand($wishes, 3);
$epithetsRand = array_rand($epithets, 3);

$name = readline('Как Вас зовут?');
$congratulations = [];
for($i = 0; $i < 3; $i++) {
  $text = [];
  $text[] = $epithets[$epithetsRand[$i]];
  $text[] = $wishes[$wishesRand[$i]];
  $congratulations[] = implode(' ', $text);
} 

$text = implode(', ', $congratulations);

echo "{$name}, Поздравляю тебя с Днем Рождения! Желаю тебе {$text}!";