<?php
include_once "./src/handlers/ArrayHandler.php";

use Handlers\ArrayHandler;
use PHPUnit\Framework\TestCase;

class ArrayHandlerTest extends TestCase
{
  private ArrayHandler $arrayHandler;

  protected function setUp(): void
  {
    $this->arrayHandler = new ArrayHandler();
  }
  /**
   * @dataProvider additionForTestMax
   */
  public function testMaxOfArray($input, $expected)
  {

    $this->assertSame($expected, $this->arrayHandler->maxOfArray($input), "Test max of array");
  }
  public function additionForTestMax()
  {
    return [
      [
        [1, 3, 5, 4, 7, 3, 10, 20],
        20
      ],
      [
        [2, 4, 6, 5, 7, 3, 2],
        7
      ]
    ];
  }
  /**
   * @dataProvider additionForTestMin
   */
  public function testMinOfArray($input, $expected)
  {

    $this->assertSame($expected, $this->arrayHandler->minOfArray($input), "Test min of array");
  }
  public function additionForTestMin()
  {
    return [
      [
        [1, 3, 5, 4, 7, 3, 10, 20],
        1
      ],
      [
        [2, 4, 6, 5, 7, 3, 2],
        2
      ]
    ];
  }
  /**
   * @dataProvider additionForTestDuplicatedElements
   */
  public function testDuplicatedElements($input, $expected)
  {
    $this->assertEqualsCanonicalizing($expected, $this->arrayHandler->duplicatedElements($input));
  }
  public function additionForTestDuplicatedElements()
  {
    return [
      [
        [1, 3, 5, 4, 7, 3, 10, 20],
        [3]
      ],
      [
        [2, 4, 6, 4, 7, 3, 2],
        [2, 4]
      ]
    ];
  }
  /**
   * @dataProvider additionForTestRemoveElementByKey
   */
  public function testRemoveElementByKey($arr, $key, $expected)
  {
    $this->assertEqualsCanonicalizing($expected, $this->arrayHandler->removeElementByKey($arr, $key));
  }
  public function additionForTestRemoveElementByKey()
  {
    return [
      [
        [1, 3, 5, 4, 7, 3, 10, 20],
        1,
        [1, 5, 4, 7, 3, 10, 20],
      ],
      [
        ["a" => 1, "b" => 2, "c" => 3],
        "b",
        ["a" => 1, "c" => 3]
      ]
    ];
  }
  /**
   * @dataProvider additionForSort
   */
  public function testSort($arr, $expected)
  {
    $this->assertEqualsCanonicalizing($expected, $this->arrayHandler->sort($arr));
  }
  public function additionForSort()
  {
    return [
      [
        [1, 3, 7, 6, 8, 0],
        [0, 1, 3, 6, 7, 8]
      ]
    ];
  }
  /**
   * @dataProvider additionForTestRemoveDuplicates
   */
  public function testRemoveDuplicates($arr, $expected)
  {
    $this->assertEqualsCanonicalizing($expected, $this->arrayHandler->removeDuplicates($arr));
  }
  public function additionForTestRemoveDuplicates()
  {
    return [
      [
        [1, 1, 2, 2, 2, 3, 4, 5, 5],
        [1, 2, 3, 4, 5]
      ]
    ];
  }
}
