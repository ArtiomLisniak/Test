<?php
//  Создать родительский (главный класс)
// Класс должен содержать 2 свойства
// Каждое свойство должно иметь геттеры и сеттеры

abstract class ClassOne
{
  public $propOne = 46;
  public $propTwo = 7;

  public function funClass(){
    return $this -> propOne;
    return $this -> propTwo;
  }

  /**
   * @return int
   */
  public function getOne(): int
  {
    return $this -> propOne;
  }

  /**
   * @return int $propOne
   */
  public function setOne(int $propOne): viod
  {
    $this -> propOne = $propOne;
  }

  /**
   * @return int
   */
  public function getTwo(): int
  {
    return $this-> propTwo;
  }

  /**
   * @return int $propOne
   */
  public function setTwo(int $propOne): viod
  {
    $this -> propTwo = $propTwo;
  }

}


// Создать 3 наследника родительского класса
// Каждый наследник должен содержать одно свойство
// Каждое свойство должно иметь геттер и сеттер
// Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
// Один наследник не должен быть наследуемым
// Один из наследников должен содержать абстрактную функцию возведения в степень

// Первый наследник

class ChildOne extends ClassOne
{
  public $a = 2;

  public function funChOne()
  {
    return $a+$propOne;
  }
  /**
   * @return int
   */
  public function getA(): int
  {
    return $this -> a;
  }

  /**
   * @return int $propOne
   */
  public function setA(int $a): viod
  {
    $this -> a = $a;
  }
}

// Второй наследник

class ChildTwo extends ClassOne
{
  private $b = 5;

  private function funChTwo()
  {
    return $b+$propTwo;
  }
  /**
   * @return int
   */
  public function getB(): int
  {
    return $thisB -> b;
  }

  /**
   * @return int $propOne
   */
  public function setB(int $b): viod
  {
    $this -> b = $b;
  }
}

// Третий наследник

abstract class ChildThree extends ClassOne
{
  public $c = 12;

  abstract public function square();
  public function funChThree()
  {
    return $c*$propTwo;
  }
  /**
   * @return int
   */
  public function getC(): int
  {
    return $this -> c;
  }

  /**
   * @return int $propOne
   */
  public function setC(int $c): viod
  {
    $this -> c = $c;
  }
}


//Создать по 2 наследника от наследников первого уровня
//Каждое свойство должно иметь геттер и сеттер
// Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
// И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством
// В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции

// Наследники от наследников первого уровня

// Наследники от ПЕРВОГО наследника первого уровня
class ChildOneFirst extends ChildOne
{
  public $d = 7;

  public function funClassOneChOneFirst()
  {
    return $d*$propOne;
  }

  public function funChOneFirst()
  {
    return $d/$a;
  }
  /**
   * @return int
   */
  public function getD(): int
  {
    return $this -> d;
  }

  /**
   * @return int $propOne
   */
  public function setD(int $d): viod
  {
    $this -> d = $d;
  }
}


class ChildOneSecond extends ChildOne
{
  public $e = 6;

  public function funClassOneChOneSecond()
  {
    return $e+$propTwo;
  }

  public function funChOneSecond()
  {
    return $e-$a;
  }
  /**
   * @return int
   */
  public function getE(): int
  {
    return $this -> e;
  }

  /**
   * @return int $propOne
   */
  public function setE(int $e): viod
  {
    $this -> e = $e;
  }
}


// Наследники от ВТОРОГО наследника первого уровня
// я так понял их нет т.к. второй наследник не наследуемый


// Наследники от ТРЕТЬЕГО наследника первого уровня
class ChildThreeFirst extends ChildThree
{
  public $h = 4;

  public function square()
  {
    return pow($h, 3);
  }

  public function funClassOneChTheeFirst()
  {
    return $h*$propOne;
  }

  public function funChThreeFirst()
  {
    return $h*$c;
  }
  /**
   * @return int
   */
  public function getH(): int
  {
    return $this -> h;
  }

  /**
   * @return int $h
   */
  public function setH(int $h): viod
  {
    $this -> h = $h;
  }
}


class ChildThreeSecond extends ChildThree
{
  public $i = 101;

  public function square()
  {
    return pow($i, 2);
  }

  public function funClassOneChTheeSecond()
  {
    return $i-$propTwo;
  }

  public function funChThreeSecond()
  {
    return $i-$c;
  }
  /**
   * @return int
   */
  public function getI(): int
  {
    return $this -> i;
  }

  /**
   * @return int $i
   */
  public function setI(int $i): viod
  {
    $this -> i = $i;
  }
}

$classObj = new ChildThreeSecond();
echo $classObj -> getI();

?>
