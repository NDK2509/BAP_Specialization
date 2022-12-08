<?php
include_once "./src/helpers/PrimeHelper.php";

use Helpers\PrimeHelper;
use PHPUnit\Framework\TestCase;

class PrimeTest extends TestCase {
  private PrimeHelper $primeHelper;

  protected function setUp(): void
  {
    $this->primeHelper = new PrimeHelper();
  }
  /**
   * @dataProvider additionForTestCheckPrime
   */
  function testCheckPrime($num, $expected) {
    $this->assertEquals($expected, $this->primeHelper->checkPrime($num));
  }

  function additionForTestCheckPrime() {
    return [
      [1, false],
      [2, true],
      [3, true],
      [5, true],
      [17, true],
      [21, false]
    ];
  }
  /**
   * @dataProvider additionForTestSumPrime
   */
  function testSumPrime($num, $expected)
  {
    $this->assertEquals($expected, $this->primeHelper->sumOfPrimesLessThanN($num));
  }

  function additionForTestSumPrime()
  {
    return [
      [100, 1060],
    ];
  }
}