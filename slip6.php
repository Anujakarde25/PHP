Write a PHP Script to check whether a year is a leap or not. 

<html>
       <body>
                 <form method="POST"  action="#">
                          Enter Number:
                               <input type="number" name="t1">
                               <input type="submit" name="submit">
                 </form>
       </body>
</html>

<?php
$num=$_POST['t1'];
if($num%4==0)
           echo "year is leap year ";
else
           echo "year is not leap year";
?>