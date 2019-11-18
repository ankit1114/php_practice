<?php
  $num = 13;
  //$count = 0;
  for ($i=2; $i <= $num; $i++) {
    if (($num%$i)==0)
      {
    echo "$i is prime number";

  }
  else
  {
    echo "$i is not prime number";

    }
    echo "<br>";
  }


?>
