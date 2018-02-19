<?php
    function findNumbers($n) {

      $numbers = array();

      for ($i = 1000; $i < 10000; $i++) {
        
        $sum = 0;
        $temp = $i;

        while($temp >= 1) {
            $sum += $temp % 10;
            $temp /= 10;
          }
        
        if($sum == $n) {
          $numbers[] = $i;
        } 
      }

      return $numbers;
    }

  ?>