<?php
// Задание №1
do {
  $quetion = (int)readline("В каком году произошло крещение Руси?\n
Варианты ответа: 880, 990, 988 год");
} while ($quetion != 880 && $quetion != 990 && $quetion != 988 );

if ($quetion === 988) {
  echo "Поздравляю! Вы ответили верно!";
} else {
  echo "Ответ неверный! Попробуйте снова";
};