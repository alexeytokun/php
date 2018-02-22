<?php
  
function isSymmetric($n, $m) {

  $temp = pow(2, $n) + $m;

  while($temp >= 1) {
    $numbers[] = $temp % 10;
    $temp /= 10;      
  }

  if (count($numbers) % 2 != 0) return false;


  for($i = 0; $i < count($numbers)/2; $i++) {
    $r = $numbers[$i];
    $right = $right + $r * pow(10, $i);
  }

  for($y = count($numbers)-1; $y >= count($numbers)/2; $y--) {
    $l = $numbers[$y];
    $left = $left + $l;
    if($y > count($numbers)/2) {
      $left *= 10;
    }
  }

  if($left == $right) return true;

  return false;
}

?>

