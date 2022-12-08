<?php

namespace Helpers;

class PrimeHelper
{
  function checkPrime(int $num): bool
  {
    if ($num <= 1) return false;
    if ($num < 4) return true;
    if ($num % 2 == 0 || $num % 3 == 0) return false;

    $k = 5;
    while ($k <= sqrt($num)) {
      if ($num % $k == 0 || $num % ($k + 2) == 0) return false;
      $k += 6;
    }
    return true;
  }

  function sumOfPrimesLessThanN(int $n): int
  {
    $sum = 0;
    for ($num = 2; $num < $n; $num++) {
      if ($this->checkPrime($num)) {
        $sum += $num;
      }
    }
    return $sum;
  }
}
