<?php
namespace Handlers;

class ArrayHandler 
{
  function maxOfArray(array $arr): int
  {
    $max = $arr[0];
    foreach ($arr as $ele)
      if ($ele > $max) $max = $ele;
    return $max;
  } 

  function minOfArray (array $arr): int {
    $min = $arr[0];
    foreach ($arr as $ele)
      if ($ele < $min) $min = $ele;
    return $min;
  }

  function duplicatedElements (array $arr): array 
  {
    return array_unique(array_diff_assoc($arr, array_unique($arr)));
  }

  function removeElementByKey(array $arr, $key) {
    unset($arr[$key]);
    return $arr;
  }

  function sort(array $arr) {
    
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++)
      for ($j = $i + 1; $j < $len; $j++)
        if ($arr[$i] > $arr[$j]) {
          $this->swap($arr, $i, $j);
        }
    return $arr;
  }
  private function swap($arr, $i, $j)
  {
    $tmp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $tmp;
  }
  function removeDuplicates(array $arr): array {
    $arr = $this->sort($arr);
    $len = count($arr);
    for ($i = 0; $i < $len - 1; $i++) {
      if ($arr[$i] == $arr[$i+1]) {
        unset($arr[$i]);
      }
    }
    return $arr;
  }
}

?>
