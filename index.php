<?php
//  Создать родительский (главный класс)
// Класс должен содержать 2 свойства
// Каждое свойство должно иметь геттеры и сеттеры

class ClassOne
{
  public $propOne = 46;
  public $propTwo = 7;

  public function funClass(){
    return $this->propOne;
    return $this->propTwo;
  }

  /**
   * @return int
   */
  public function getOne(): int
  {
    return $this->propOne;
  }

  /**
   * @return int $propOne
   */
  public function setOne(int $propOne): void
  {
    $this->propOne = $propOne;
  }

  /**
   * @return int
   */
  public function getTwo(): int
  {
    return $this->propTwo;
  }

  /**
   * @return int $propTwo
   */
  public function setTwo(int $propOne): void
  {
    $this->propTwo = $propTwo;
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
    return $this->a+$this->propOne;
  }
  /**
   * @return int
   */
  public function getA(): int
  {
    return $this->a;
  }

  /**
   * @return int $a
   */
  public function setA(int $a): void
  {
    $this->a = $a;
  }
}

$classObj = new ChildOne();
echo $classObj->funChOne() . '<br />';

// Второй наследник

final class ChildTwo extends ClassOne
{
  public $b = 5;

  public function funChTwo()
  {
    return $this->b-$this->propTwo;
  }
  /**
   * @return int
   */
  public function getB(): int
  {
    return $this->b;
  }

  /**
   * @return int $b
   */
  public function setB(int $b): void
  {
    $this->b = $b;
  }
}

$classObj = new ChildTwo();
echo $classObj->funChTwo() . '<br />';

// Третий наследник

abstract class ChildThree extends ClassOne
{
  public $c = 12;

  public function funChThree()
  {
    return $this->c*$this->propOne;
  }

  abstract public function square();

  /**
   * @return int
   */
  public function getC(): int
  {
    return $this->c;
  }

  /**
   * @return int $c
   */
  public function setC(int $c): void
  {
    $this->c = $c;
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
    return $this->d*$this->propOne;
  }

  public function funChOneFirst()
  {
    return $this->d/$this->a;
  }
  /**
   * @return int
   */
  public function getD(): int
  {
    return $this->d;
  }

  /**
   * @return int $d
   */
  public function setD(int $d): void
  {
    $this->d = $d;
  }
}


class ChildOneSecond extends ChildOne
{
  public $e = 6;

  public function funClassOneChOneSecond()
  {
    return $this->e+$this->propTwo;
  }

  public function funChOneSecond()
  {
    return $this->e-$this->a;
  }
  /**
   * @return int
   */
  public function getE(): int
  {
    return $this->e;
  }

  /**
   * @return int $e
   */
  public function setE(int $e): void
  {
    $this->e = $e;
  }
}

$classObj = new ChildOneFirst();
echo $classObj->funClassOneChOneFirst() . '<br />';
echo $classObj->funChOneFirst() . '<br />';

$classObj = new ChildOneSecond();
echo $classObj->funClassOneChOneSecond() . '<br />';
echo $classObj->funChOneSecond() . '<br />';

// Наследники от ВТОРОГО наследника первого уровня
// я так понял их нет т.к. второй наследник не наследуемый


// Наследники от ТРЕТЬЕГО наследника первого уровня
class ChildThreeFirst extends ChildThree
{
  public $h = 4;

  public function square()
  {
    return pow($this->h, 3);
  }

  public function funClassOneChTheeFirst()
  {
    return $this->h*$this->propOne;
  }

  public function funChThreeFirst()
  {
    return $this->h*$this->c;
  }
  /**
   * @return int
   */
  public function getH(): int
  {
    return $this->h;
  }

  /**
   * @return int $h
   */
  public function setH(int $h): void
  {
    $this->h = $h;
  }
}


class ChildThreeSecond extends ChildThree
{
  public $i = 101;

  public function square()
  {
    return pow($this->i, 2);
  }

  public function funClassOneChTheeSecond()
  {
    return $this->i-$this->propTwo;
  }

  public function funChThreeSecond()
  {
    return $this->i-$this->c;
  }
  /**
   * @return int
   */
  public function getI(): int
  {
    return $this->i;
  }

  /**
   * @return int $i
   */
  public function setI(int $i): void
  {
    $this->i = $i;
  }
}

$classObj = new ChildThreeFirst();
echo $classObj->square() . '<br />';
echo $classObj->funClassOneChTheeFirst() . '<br />';
echo $classObj->funChThreeFirst() . '<br />';

$classObj = new ChildThreeSecond();
echo $classObj->square() . '<br />';
echo $classObj->funClassOneChTheeSecond() . '<br />';
echo $classObj->funChThreeSecond() . '<br />';
?>
