<?php
for($i=1; $i<=5; $i++)
{
  for($j=1; $j<=$i; $j++){
   echo "*";

}
  for($k=1; $k <=(5-$i) ; $k++) {
    echo "#";

  }
   echo "<br>";
}

?>
