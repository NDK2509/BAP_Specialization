<?php
include_once "./src/utils/Calculator.php";

use Utils\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
  /**
   * @dataProvider additionForTestAdd
   */
  function testAdd($a, $b, $expected)
  {
    $calc = new Calculator($a, $b);
    $this->assertEquals($expected, $calc->add());
  }
  function additionForTestAdd()
  {
    return [
      [1, 2, 3],
      [4, 5, 9],
      [0, -1, -1]
    ];
  }
  /**
   * @dataProvider additionForTestSubtract
   */
  function testSubtract($a, $b, $expected)
  {
    $calc = new Calculator($a, $b);
    $this->assertEquals($expected, $calc->subtract());
  }
  function additionForTestSubtract()
  {
    return [
      [1, 2, -1],
      [9, 2, 7],
      [0, -1, 1]
    ];
  }
  /**
   * @dataProvider additionForTestMultiply
   */
  function testMultiply($a, $b, $expected)
  {
    $calc = new Calculator($a, $b);
    $this->assertEquals($expected, $calc->multiply());
  }
  function additionForTestMultiply()
  {
    return [
      [1, 2, 2],
      [4, 5, 20],
      [0, -1, 0]
    ];
  }
  /**
   * @dataProvider additionForTestDivide
   */
  function testDivide($a, $b, $expected)
  {
    $calc = new Calculator($a, $b);
    $this->assertEquals($expected, $calc->divide());
  }
  function additionForTestDivide()
  {
    return [
      [1, 2, 0.5],
      [4, 5, 0.8],
      [0, -1, 0],
      [10000, 0, "Divide by zero"]
    ];
  }
}
