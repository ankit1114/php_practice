<?php
  $num = 6;
for ($i=1; $i <= $num; $i++) {
  print_r($i);
  die("1");
  if ($num%$i == 0) {
    $s = $s + $i;
    print_r($s);
    die("test");
  }
}
if ($num == $s) {
  echo "perfect no";
}else
{
  echo "not perfect no";
}
?>
