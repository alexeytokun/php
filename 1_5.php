<?php
  function reverseNumder($n) {

    $numbers = array();
  
    while($n >= 1) {

      $numbers[] = $n % 10;
      $n /= 10;      
    }

    $m = 0;
    for($i = 0; $i < count($numbers); $i++) {
      $m += $numbers[$i];
      if($numbers[$i + 1]) {
        $m *= 10;
      }
    }

    return $m;
  }

?>