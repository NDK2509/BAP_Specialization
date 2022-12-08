<?php 
namespace Handlers;

class StringHandler {
  function countCharactersWithoutSpaces(string $str): int {
    $cleanedStr = $this->cleanStrBySpaces($str);
    return strlen($cleanedStr);
  }

  function duplicatedCharacters(string $str, int $appearTimes = 2): array {
    $charsArr = str_split($this->cleanStrBySpaces($str));
    $dups = [];
    foreach (array_count_values($charsArr) as $val => $c)
      if ($c > $appearTimes) $dups[] = $val;
    return $dups;
  }

  function replace(string $sourceStr, string $searchStr, string $replaceStr) {
    return str_replace($searchStr, $replaceStr, $sourceStr);
  }
  private function cleanStrBySpaces($str)
  {
    return str_replace(" ", "", $str);
  }
}