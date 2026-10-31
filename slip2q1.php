 Write a PHP Script which will convert temperatures from Celsius(C)to Fahrenheit (F). (Hint: C=5.0/9(F-32)  
<html>
      <body>
                    <form method="POST" action="#">
                          Enter  Celsius:
                            <input type="number" name="t1"><br>
      </body>
</html>
<?php
$c=$_POST['t1'];
 $f = ($c * 9 / 5) + 32;
 echo"fehrenheit=".$f;
?>
