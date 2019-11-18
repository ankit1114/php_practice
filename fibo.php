<?php
  $a = 0;
  $b = 1;
  $n =0;
  while ($n < 10) {
    $c = $a + $b;
    echo $c;
    $a = $b;
    $b = $c;
    $n= $n +1;
  }
?>
