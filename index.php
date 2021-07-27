<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

//посчитать длину массива
var_dump(count($arr));
echo '<br />';

// переместить первые 4 элемента массива в конец массива
$count = 0;
foreach ($arr as $key => $value) {
  $arr[] = array_shift($arr);
  $count++;
  if ($count>=4) {
    break;
  }
}
var_dump($arr);
echo '<br />';

// получить сумму 4,5,6 элемента
print_r($arr[3] + $arr[4] + $arr[5]);
echo '<br />';

$firstArr = [
  'one' => 1,
  'two' => 2,
  'three' => 3,
  'foure' => 5,
  'five' => 12,
];

$secondArr = [
  'one' => 1,
  'seven' => 22,
  'three' => 32,
  'foure' => 5,
  'five' => 13,
  'six' => 37,
];

// найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
print_r(array_diff($secondArr, $firstArr));
echo '<br />';

// найти все элементы которые присутствую в первом и отсутствуют во втором
print_r(array_diff($firstArr, $secondArr));
echo '<br />';

// найти все элементы значения которых совпадают
print_r(array_intersect($firstArr, $secondArr));
echo '<br />';

// найти все элементы значения которых отличается
var_dump(array_diff($firstArr, $secondArr), array_diff($secondArr, $firstArr));
echo '<br />';

$thirdArr = [
  'one' => 1,
  'two' => [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    ],
  'three' => [
  'one' => 1,
  'two' => 2,
  ],
  'foure' => 5,
  'five' => [
   'three' => 32,
   'foure' => 5,
   'five' => 12,
  ],
];

// получить все вторые элементы вложенных массивов
foreach($thirdArr as $key => $array) {
  if(is_array($array)) {
    $ar = array_values($array);
    var_dump($ar[1]);
  }
}
echo '<br />';

// получить общее количество элементов в массиве
 echo count($thirdArr, COUNT_RECURSIVE);
 echo '<br />';

// получить сумму всех значений в массиве
$sum =0;
array_walk_recursive($thirdArr, function($number) use (&$sum) {
  $sum += $number;
});
echo $sum . '<br />';;
