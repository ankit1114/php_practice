<?php
  $a = array('5', '8', '2', '7', '1');
  $b = count($a);

  for ($j=0; $j < $b;  $j++) {
    for ($i=0; $i < $b-1; $i++) {
      if ($a[$i] > $a[$i+1]) {
        $temp = $a[$i];
        $a[$i] = $a[$i+1];
        $a[$i+1] = $temp;
      }
      echo "I == " . $i . " == ". $a[$i];
      echo "<br>";
    }
  }

  print "<pre>";
  print_r($a);
  echo "<br>";
?>
