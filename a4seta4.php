<html>
<body>
<form method="post">
    Enter First Number:
    <input type="number" name="a" required><br><br>

    Enter Second Number:
    <input type="number" name="b" required><br><br>

    <input type="submit" name="submit" value="Swap">
</form>

<?php
function SwapValue($x, $y)
{
    $temp = $x;
    $x = $y;
    $y = $temp;

    echo "Call by Value:<br>";
    echo "First Number: $x<br>";
    echo "Second Number: $y<br><br>";
}

function SwapReference(&$x, &$y)
{
    $temp = $x;
    $x = $y;
    $y = $temp;
}

if (isset($_POST['submit']))
{
    $a = $_POST['a'];
    $b = $_POST['b'];

    SwapValue($a, $b);

    echo "Original Values After Call by Value:<br>";
    echo "a = $a, b = $b<br><br>";

    SwapReference($a, $b);

    echo "Call by Reference:<br>";
    echo "First Number: $a<br>";
    echo "Second Number: $b";
}
?>
</body>
</html>