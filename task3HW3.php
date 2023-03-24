<?php
// Задание №3
$students = [
  'ИТ20' => [
      'Иванов Иван' => 5,
      'Кириллов Кирилл' => 3,
      'Григорьев Виктор' => 2
  ],
  'БАП20' => [
      'Антонов Антон' => 4,
      'Капустяк Зоя' => 5,
      'Смирнова Юлия' => 2
  ]
];
$sum1 = 0;
$sum2 = 0;
$drop = [];
foreach($students['ИТ20'] as $value1 => $ind1) {
  $sum1 = $sum1 + $ind1;
  if($ind1 < 3) {
    $drop[] = $value1;
  }
}
foreach($students['БАП20'] as $value2 => $ind2) {
  $sum2 = $sum2 + $ind2;
  if($ind2 < 3) {
    $drop[] = $value2;
  }
}

$sum1GPA = $sum1 / count($students['ИТ20']);
$sum2GPA = $sum2 / count($students['БАП20']);

$group = [];
foreach($students as $ind => $val) {
  $group[] = $ind;
}

if($sum1GPA > $sum2GPA) {
  echo "Успеваемость группы {$group[0]} выше\n";
} else {
  echo "Успеваемость группы {$group[1]} выше\n";
}

foreach($drop as $student) {
  if(array_key_exists($student, $students['ИТ20'])) {
   $text = "{$group[0]}: {$student};";
  };
  if(array_key_exists($student, $students['БАП20'])) {
    $text2 = "{$group[1]}: {$student};";
   };
}

echo "Список на отчисление: 
-{$text}
-{$text2}
";