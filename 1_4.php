<?php
  function findNumbers() {

    $numbers = array();

    function isIncreasing($n) {

      $max = 10;
  
      while($n >= 1) {
  
        if(($n % 10) >= $max) {
          return false;
        }
  
        $max = $n % 10;
        $n /= 10;
      }
  
      return true;
    }

    function isDecreasing($n) {

      $min = -1;
  
      while($n >= 1) {
  
        if(($n % 10) <= $min) {
          return false;
        }
  
        $min = $n % 10;
        $n /= 10;
      }
  
      return true;
    }


    for ($i = 1000; $i < 10000; $i += 2) {
      
     if (isIncreasing($i) || isDecreasing($i)) {
       $numbers[] = $i;
     }
    
  }

  return $numbers;
}

?>