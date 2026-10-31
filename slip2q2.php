Write a PHP Script to display the surface area and volume of a cuboid. (Hint: surface
area=2(lb+lh+bh ), volume = l*b*h ) 
<html>
	<body>
                  <form method="POST" action="#">
                               Enter Length:
                                    <input type="number" name="t1"><br><br>
                              Enter bridth:
                                    <input type="number" name="t2"><br><br>
                              Enter Height:
                                     <input type="number" name="t3"><br><br>
                                     <input type="submit" name="submit">
                  </form>
	</body>
</html>
<?php
$l=$_POST['t1'];
$b=$_POST['t2'];
$h=$_POST['t3'];
$s=2*($l*$b+$l*$h+$b*$h);
$v=$l*$b*$h;
echo"surface area=".$s;
echo"volume=".$v;
?>