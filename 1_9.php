<?php
  
function isAutomorph($n) {
  $m = $n * $n;
  $numbers = array();
  
    while($m >= 1) {

      $numbers[] = $m % 10;
      $m /= 10;      
    }
  
    $m = 0;

    for($i = 0; $i < count($numbers); $i++) {
      $temp = $numbers[$i];
      $m = $m + $temp * pow(10, $i);
      if($m === $n) {
        return true;
      }
    }
  return false;
}

?>

