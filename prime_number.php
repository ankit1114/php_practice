<?php
  $num = 12;
  $count = 0;
  for ($i=0; $i <= $num; $i++) {
    if (($num%$i)==0) {
      $count++;
    }
  }
  if($count < 3);
  {
    echo "$num is prime number";
  }
  else
  {
    echo "$num is not prime number";
  }
?>
