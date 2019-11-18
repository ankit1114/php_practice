<?php
  $num = 13;
  for ($i=2; $i <= $num; $i++) {
    if (($num%$i)==0){
      echo "$i is prime number";
    }
    if (($num%$i)!=0){
      continue;
    }
    echo "<br>";
  }
?>
