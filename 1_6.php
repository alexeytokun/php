<?php
  function filterNumders() {

    $numbers = array();

    for ($i = 1000; $i < 10000; $i++) {
      
      $temp = $i;
      $flag = true;

      while($temp >= 1) {
         $var = $temp % 10;
         if($var != 0 && $var != 2 && $var != 3 && $var != 7) {
           $flag = false;
         }
         $temp /= 10;
      }
      
      if ($flag) {
        $numbers[] = $i;
      }
        
    }

    return $numbers;
  }
  
?>