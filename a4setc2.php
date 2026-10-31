<html>
<body>
<form method="post">
    Enter First Number:
    <input type="number" name="a" required><br><br>

    Enter Second Number:
    <input type="number" name="b" required><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
function Arithmetic($a = 10, $b = 5)
{
    echo "Addition: " . ($a + $b) . "<br>";
    echo "Subtraction: " . ($a - $b) . "<br>";
    echo "Multiplication: " . ($a * $b) . "<br>";

    if ($b != 0)
    {
        echo "Division: " . ($a / $b) . "<br>";
        echo "Modulus: " . ($a % $b);
    }
    else
    {
        echo "Division and Modulus are not possible.";
    }
}

if (isset($_POST['submit']))
{
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];

    Arithmetic($a, $b);
}
?>
</body>
</html>