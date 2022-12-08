<?php

namespace Utils;

use Error;

class Calculator
{
  private $a;
  private $b;

  public function __construct($a, $b)
  {
    if (is_numeric($a) && is_numeric($b)) {
      $this->a = $a;
      $this->b = $b;
    } else {
      throw new Error("invalid type");
    }
  }

  function add()
  {
    return $this->a + $this->b;
  }

  function subtract()
  {
    return $this->a - $this->b;
  }

  function multiply()
  {
    return $this->a * $this->b;
  }

  function divide()
  {
    if ($this->b == 0) {
      return "Divide by zero";
    }
    return $this->a / $this->b;
  }
}
