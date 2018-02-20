<?php
  
function filterNumbers() {

  $filtered = array();

  for ($i = 1000; $i < 10000; $i++) {

    $temp = $i;
    $numbers = array();
    while($temp >= 1) {  
      $var = $temp % 10;
      for ($j = 0; $j < count($numbers); $j++) {
        if ($numbers[$j] === $var) {
          $filtered[] = $i;
          
          break 2;
        }
      }
      $numbers[] = $var;
      $temp /= 10;
    }
        
  }

  return $filtered;
}

?>