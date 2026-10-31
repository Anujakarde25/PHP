//Write a PHP Script to display Quotient and Remainder of the division of two variables.  
<html>
           <body>
                     <form method="POST"  action="#">
                                Enter Number 1:
                                      <input type="number" name="t1"><br><br>
                                 Enter Number 2:
                                      <input type="number" name="t2"><br><br>
                                      <input type="submit"  name="submit"> <br>
                     </form>
            </body>
</html>
<?php
$num1=$_POST['t1'];
$num2=$_POST['t2'];
$q=$num1%$num2;
$r=$num1/$num2;
echo("quotient=". $q);
echo("reminder=". $r);
?>