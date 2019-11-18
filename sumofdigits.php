<?php
$n = "123640";
$s=0;
for ($i=0; $i <=strlen($n); $i++) {
  $r = $n%10;
  $s = $s + $r;
  $n = $n/10;
}
  echo $s;
?>
