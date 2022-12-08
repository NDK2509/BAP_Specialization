<?php 
namespace Handlers;

class QuadraticEquation2Solver {
  private $a;
  private $b;
  private $c;

  public function __construct($a, $b, $c)
  {
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
  }

  function getDelta() {
    return $this->b**2 - 4*$this->a*$this->c;
  }
  function solve() {
    $delta = $this->getDelta();
    switch (true) {
      case $delta < 0: return "the equation has no solution";
      case $delta == 0: return -($this->b/(2*$this->a));
      default: return [-($this->b - sqrt($delta))/(2*$this->a*$this->c), - ($this->b + sqrt($delta)) / (2 * $this->a * $this->c)];
    }
  }
}