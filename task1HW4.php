<?php
// Задание №1
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$arrFn = function($number) 
{
  if($number % 2 == 0) {
    return "Четное";
  } else {
    return "Нечетное";
  };
};

$result = array_map($arrFn, $arr);
var_dump($result);