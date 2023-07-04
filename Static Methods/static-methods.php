<?php

class Math {
  public static function average($numbers) {
    return array_sum($numbers) / count($numbers);
  }
}

$average = Math::average([1, 2, 3, 4, 5]);
echo $average;

?>