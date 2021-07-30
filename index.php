<?php
// Создать функцию определяющую какой тип данных ей передан и выводящей соответствующее сообщение.
function dataType($a){
    return gettype($a);
 }
echo dataType('50');

// Создать функцию которая считает все буквы b в переданной строке,
// в случае если передается не строка функция должна возвращать false
function bString($c){
    $b = is_string($c) ? substr_count($c,'b') : "falce";
    return $b;
}
echo bString(432343);

// Создать функцию которая считает сумму
// значений всех элементов массива произвольной глубины
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

function arraySum($arr) {
    $sum = 0;
    foreach($arr as $v) {
        if (is_array($v)) {
            $sum += arraySum($v);
        } else {
            $sum += $v;
        }
    }
    return $sum;
}
echo arraySum($thirdArr);

// Создать функцию которая определит сколько квадратов меньшего размера можно вписать
// в квадрат большего размера размер возвращать в float
function square($g, $f ){
  $s= ($g <= $f) ? pow($f, 2)/pow($g, 2) : pow($g, 2)/pow($f, 2);
    return $s;
}
echo square(6, 9);
?>
