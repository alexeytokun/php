<?php
  
function findPalindroms($n) {

  $filtered = array();
  
  for ($i = $n; $i > 0; $i--) {
  
  $m = $i * $i;
  $temp = $m;
  
  $numbers = array();
  while($m >= 1) {
    $numbers[] = $m % 10;
    $m /= 10;      
  }
  
  $m = 0;
  for($j = 0; $j < count($numbers); $j++) {
    $m += $numbers[$j];
    if($m === $temp) {
      $filtered[] = $i;
      break;
    }
    if($numbers[$j + 1]) {
      $m *= 10;
    }
  }
}

return $filtered;
 
}

?>

