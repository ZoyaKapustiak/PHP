<?php
// Задание №3
do {
  $number = (int)readline("Введите положительное число\n");
} while (!$number);

$finger = $number % 8;

if($finger == 6) {
  $finger -= 2;
}
if($finger == 7) {
  $finger -= 4;
}
  
switch ($finger) {
  case '0':
    echo "Указательный палец";
    break;
  case '1':
    echo "Большой палец";
    break;
  case '2':
    echo "Указательный палец";
    break;
  case '3':
    echo "Средний палец";
    break;
  case '4':
    echo "Безымянный палец";
    break;
  case '5':
    echo "Мизинец";
    break;
  default:
    echo "Вы ввели некорретное число";
    break;
};