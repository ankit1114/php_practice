<?php
  $string = "naman";
  $reverse = '';
  $j = 0;
  while(!empty($string[$j])) {
    $reverse = $string[$j].$reverse;
    $j++;
  }

  echo $reverse;
  if($reverse == $string){

    echo " string is palindrome";
  }else
  {
    echo " string is not palindrome";
  }
?>
