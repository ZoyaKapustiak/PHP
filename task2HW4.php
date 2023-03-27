<?php
// Задание №2
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function num($number): array
{
  $max['max'] = max($number);
  $min['min'] = min($number);
  $avg['avg'] = array_sum($number) / count($number);
  return [
    $max,
    $min,
    $avg,
  ];
}

var_dump(num($arr));

