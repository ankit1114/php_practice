<?php

$input=5;
    for ($i = 2; $i <= $input-1; $i++) {
      if ($input % $i == 0) {
      $value= True;

      }
}
if (isset($value) && $value) {
     echo 'The Number '. $input . ' is not prime';
}  else {
   echo 'The Number '. $input . ' is prime';
   }

  /*$num = 37;
  for ($i=2; $i <= $num; $i++) {
    if (($num%$i)==0){
      echo "$i is prime number";
    }
    if (($num%$i)!=0){
      continue;
    }
    echo "<br>";
  }*/
?>
