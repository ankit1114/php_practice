<form method="post">
  <label>Enter a string :</label>
  <input type="text" name="string"><br><br>

  <label>Enter a frequency :</label>
  <input type="text" name="freq"><br><br>

  <input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){
   $string=$_POST['string'];
   $freq = $_POST['freq'];

   $rev = strrev($string);
   echo "$rev";
   echo "<br>";
   echo "Frequency of string is : ";
   echo substr_count($string,$freq);
   echo "<br>";
 if($string == $rev){
    echo "The number $string is Palindrome";
 }else{
    echo "The number $string is not a Palindrome";

  }

}
?>
