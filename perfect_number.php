<?php
/* 6=1*6
   6=2*3
   6=3*2
   ________
  | 6=1+2+3 |
   -------
*/
  $s=0;
  $num = 28;
  for ($i=1; $i < $num; $i++) {
    if (($num%$i) == 0) {
      $s = $s + $i;
    }
  }
  if ($num == $s) {
    echo "perfect no";
  }else
  {
    echo "not perfect no";
  }
//done
?>
