<?php

// Count the divisors of a number
function getDivisorsCnt(int $number): int {
    $d = 1;
    for ($i = 1; $i <= $number / 2; ++$i){
      if ($number % $i == 0){
          ++$d;
      }
    }

    return $d;
}

var_dump(getDivisorsCnt(30));

?>