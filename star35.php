
<?php
 for($i=1; $i<= 6; $i++)
        {
            if($i%2 != 0)
            {
                for($j=1; $j<= 6/2+1; $j++)
                {
                    echo "*";
                }
            }
            else
            {
              for($j=1; $j<= 6/2; $j++)
                {
                   echo " * ";
                }
            }
            echo "<br>";
          }
?>
