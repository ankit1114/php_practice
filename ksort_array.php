<?php
$a = array('Ankit' => '24', 'Aniket' => '27','Tarun' => '25');
ksort($a);
foreach ($a as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
