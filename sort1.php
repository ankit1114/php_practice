<?php
  $array = array("a"=>"Ankit","b"=>"Kumar","c"=>"Maurya");
  rsort($array);
  foreach ($array  as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
  }


 ?>
