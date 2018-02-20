<?php
  function containsSameNumbers($n) {

    $numbers = array();
      while($n >= 1) {
        $var = $n % 10;
        for ($i = 0; $i < count($numbers); $i++) {
          if ($numbers[$i] === $var) {
            return true;
          }
        }
        
        $numbers[] = $var;
        $n /= 10;
      }
      
    return false;
  }

?>