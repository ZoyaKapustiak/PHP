<?php
// Задание №1
$arr1 = range(1, 10, 1);
$arr2 = range(1,10, 1);
shuffle($arr1);
shuffle($arr2);
$newArr = [];
foreach($arr1 as $ind => $val) {
  $newArr[$ind] = $val * $arr2[$ind];
}

print_r($newArr);