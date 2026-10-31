Write a PHP Script which will perform the Addition, Subtraction, Multiplication,
and Division of two numbers as per the choice. (Use Switch Case)

<html>
<body>
    <form method="POST" action="#">
        Enter First Number:
        <input type="number" name="num1" > <br><br>
        Enter Second Number:
        <input type="number" name="num2"><br><br>

        Select Operation:
        <select name="choice">
            <option value="1">Addition</option>
            <option value="2">Subtraction</option>
            <option value="3">Multiplication</option>
            <option value="4">Division</option>
        </select><br><br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php
$a = $_POST['num1'];
$b = $_POST['num2'];
$choice = $_POST['choice'];

switch ($choice)
{
    case 1:
        $ans = $a + $b;
        echo "Addition = " . $ans;
        break;
    case 2:
        $ans = $a - $b;
        echo "Subtraction = " . $ans;
        break;
    case 3:
        $ans = $a * $b;
        echo "Multiplication = " . $ans;
        break;
    case 4:
        $ans = $a / $b;
         echo "Division = " . $ans;
        break;
   }
?>

