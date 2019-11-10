<?php

  $arr1 = array("india" => "29", "pakistan" => "23", "bhutan" => "20", "china" => "40");
  $arr2 = array("india" => "29", "pakistan" => "23", "bhutan" => "20", "china" => "408");
  echo "<pre>";
  print_r(array_intersect($arr1,$arr2));


?>
