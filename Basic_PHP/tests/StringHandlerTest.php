<?php
include_once "./src/handlers/StringHandler.php";

use Handlers\StringHandler;
use PHPUnit\Framework\TestCase;

class StringHandlerTest extends TestCase {
  private StringHandler $stringHandler;
  protected function setUp(): void
  {
    $this->stringHandler = new StringHandler();
  }
  /**
   * @dataProvider additionForTestCountCharacters
   */
  function testCountCharacter($str, $expected) {
    $this->assertSame($expected, $this->stringHandler->countCharactersWithoutSpaces($str));
  }

  function additionForTestCountCharacters() {
    return [
      [
        "abc vdfg jsl",
        10
      ],
      [
        "kjdsnf sksmf  ls  ",
        13
      ]
    ];
  }

  /**
   * @dataProvider additionForTestDuplicatedCharacters
   */
  function testDuplicatedCharacters($str, $expected)
  {
    $this->assertSame($expected, $this->stringHandler->duplicatedCharacters($str));
  }

  function additionForTestDuplicatedCharacters()
  {
    return [
      [
        "aaa bbb cc dd",
        ["a", "b"]
      ],
      [
        "aaaaaa bbbb lscmsd sc",
        ["a", "b", "s"]
      ]
    ];
  }
  /**
   * @dataProvider additionForTestReplace
   */
  function testReplace($str, $searchStr, $replaceStr, $expected)
  {
    $this->assertSame($expected, $this->stringHandler->replace($str, $searchStr, $replaceStr));
  }

  function additionForTestReplace()
  {
    return [
      [
        "welcome to bap company",
        "company",
        "software",
        "welcome to bap software"
      ]
    ];
  }
}