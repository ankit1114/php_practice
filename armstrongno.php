<?php
$num=407;
$total=0;
$x=$num;
while($x!=0)
{
  print_r($x);
  die();
$rem=$x%10;
$total=$total+$rem*$rem*$rem;
$x=$x/10;
}
print "<pre>";
print_r($total);
die();
if($num==$total)
{
echo "Yes it is an Armstrong number";
}
else
{
echo "No it is not an armstrong number";
}
?>
