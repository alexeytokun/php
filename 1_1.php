<?php
    function sumDigits ($n) {
      $sum = 0;
      while($n >= 1) {
        if(($n % 10) < 5) {
          $sum++;
        }
          $n /= 10;
      }
       return $sum;
    }

  echo sumDigits(12345);
?>