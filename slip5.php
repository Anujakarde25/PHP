Write a PHP Script to display the total and percentage of Marks of Subjects (Out
of 100) Data Structure, Digital Marketing, PHP, SE, and Bigdata.
<html>
<body>
               <form method="POST"  action="#">
                    Enter DSA Marks:
                           <input type="number" name="t1"><br><br>
                      Enter Digital Marketing Marks:
                           <input type="number" name="t2"><br><br>
                        Enter PHP Marks:
                           <input type="number" name="t3"><br><br>
                          Enter SE Marks:
                           <input type="number" name="t4"><br><br>
                           Enter BIg Data Marks:
                           <input type="number" name="t5"><br><br>
                           <input type="submit" name="submit">
              </form>
</body>
</html>
<?php
$sub1=$_POST['t1'];
$sub2=$_POST['t2'];
$sub3=$_POST['t3'];
$sub4=$_POST['t4'];
$sub5=$_POST['t5'];

$tot=$sub1+$sub2+$sub3+$sub4+$sub5;
$per=$tot/500*100;
echo "total=".$tot;
echo "percentage=".$per;
?>