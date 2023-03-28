<?php
// Задание №3

$box = [
  [
      0 => 'Тетрадь',
      1 => 'Книга',
      2 => 'Настольная игра',
      3 => [
          'Настольная игра',
          'Настольная игра',
      ],
      4 => [
          [
              'Ноутбук',
              'Зарядное устройство'
          ],
          [
              'Компьютерная мышь',
              'Набор проводов',
              [
                  'Фотография',
                  'Картина'
              ]
          ],
          [
              'Инструкция',
              [
                  'Ключ'
              ]
          ]
      ]
  ],
  [
      0 => 'Пакет кошачьего корма',
      1 => [
          'Музыкальный плеер',
          'Книга'
      ]
  ]
];

function findLine(string $name, array $arr): ?bool
{
  foreach($arr as $value) {
      if(is_array($value)) {
          $result = findLine($name, $value);
          if ($result != null) {
              return true;
          };
      } elseif ($value == $name) {
          return true;
      };
  };
  return false;
};

$res = findLine('Ключ', $box);
var_dump($res);