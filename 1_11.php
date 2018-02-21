<?php
  
function findNumbers($n) {

  $result = array();

  for($i = 0; $i < count($n); $i++) {

    $temp = $n[$i];
    $sum = 0;

    while($temp >= 1) {
    $sum += $temp % 10;
    $temp /= 10;      
    }

    if ($n[$i] % $sum == 0) {
      $result[] = $n[$i];
    }

  }
  
  return $result;
}

for($m = 1; $m < 1000; $m++) {
  $test[] = $m;
}

echo var_dump(findNumbers($test));


?>

