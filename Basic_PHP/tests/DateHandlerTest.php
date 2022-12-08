<?php
include_once "./src/handlers/DateHandler.php";

use Handlers\DateHandler;
use PHPUnit\Framework\TestCase;

class DateHandlerTest extends TestCase
{
  private DateHandler $dateHandler;
  protected function setUp(): void
  {
    $this->dateHandler = new DateHandler();
  }
  /**
   * @dataProvider additionForTestDayOfWeek
   */
  function testDayOfWeek($num, $expected)
  {
    $this->assertSame($expected, $this->dateHandler->dayOfWeek($num));
  }
  function additionForTestDayOfWeek()
  {
    return [
      [1, "Sunday"],
      [2, "Monday"],
      [3, "Tuesday"],
      [4, "Wednesday"],
      [5, "Thursday"],
      [6, "Friday"],
      [7, "Saturday"],
    ];
  }
}
