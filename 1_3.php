<?php
  function checkNumber($n) {

    $max = 10;
    $digits = 0;

    while($n >= 1) {

      if(($n % 10) >= $max) {
        return false;
      }

      $max = $n % 10;
      $n /= 10;
      $digits++;
    }

    if ($digits < 2) return false;

    return true;
  }

?>