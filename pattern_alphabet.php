<?php

  $alphabet = range('A','Z');
  for ($i=0; $i <= 4; $i++) {
    for ($j=0; $j <=$i; $j++) {
      echo $alphabet[$i];
    }
    echo "<br>";
  }

?>
