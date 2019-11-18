<?php
$string = "adaaad";

$j = 0;
while(!empty($string[$j])) {
   $j++;
}

for($i = ($j-1); $i >= 0; $i--) {
     echo $string[$i];
}
if(isset($string[$i]) == $string){
  echo "string is palindrome";
}else
{
  echo "string is not palindrome";
}

?>
