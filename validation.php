<?php
 $mobile = "6262626232";
 $mobile = trim($mobile);
 $length = strlen( $mobile);

   if ($length==10 and is_numeric( $mobile) and  $mobile[0]>=6)
   {
     echo "valid mobile";
   }
   else {
     echo "invalid mobile";
   }
 ?>
