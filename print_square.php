<?php
for ($i=1; $i <=4; $i++) {
  for ($j=1; $j <=4 ; $j++) {
    if($i ==1 || $i == 4   || $j == 1 || $j == 4 ){

      echo "*","&nbsp";
    }else{
      echo '',"&nbsp","&nbsp";
    }
  }
  echo "<br>";
}
?>
