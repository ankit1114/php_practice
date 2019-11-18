<?php

$n=1;
for ($i=1; $i <=5 ; $i++) {
  for ($j=5; $j >=$i ; $j--) {
    echo "&nbsp;";

  }
  for ($k=1; $k <=$i ; $k++) {
     echo "&nbsp;".$n++."&nbsp;";
  }
  echo "<br>";
}
?>
