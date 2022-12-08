<?php
include_once "./src/handlers/QuadraticEquation2Solver.php";

use Handlers\QuadraticEquation2Solver;
use PHPUnit\Framework\TestCase;

class QuadraticEquation2Test extends TestCase
{
  /**
   * @dataProvider additionForTestGettingDelta
   */
  function testGettingDelta(array $params, $expected)
  {
    $solver = new QuadraticEquation2Solver($params[0], $params[1], $params[2]);
    $this->assertEquals($expected, $solver->getDelta());
  }

  function additionForTestGettingDelta()
  {
    return [
      [
        [1, 1, 5],
        -19
      ],
      [
        [1, 4, 4],
        0
      ],
      [
        [5, 6, 1],
        16
      ]
    ];
  }
  /**
   * @dataProvider additionForTestSolver
   */
  function testSolver(array $params, $expected)
  {
    $solver = new QuadraticEquation2Solver($params[0], $params[1], $params[2]);
    $this->assertEquals($expected, $solver->solve());
  }

  function additionForTestSolver()
  {
    return [
      [
        [1, 1, 5],
        "the equation has no solution"
      ],
      [
        [1, 4, 4],
        -2
      ],
      [
        [5, 6, 1],
        [-0.2, -1]
      ]
    ];
  }
}
