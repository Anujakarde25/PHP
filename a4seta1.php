<html>
<body>
<form method="post">
    Enter Base (x):
    <input type="number" name="x" required><br><br>

    Enter Power (y):
    <input type="number" name="y" required><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
function Power($x, $y)
{
    return pow($x, $y);
}

if (isset($_POST['submit']))
{
    $x = $_POST['x'];
    $y = $_POST['y'];

    echo "Result: " . Power($x, $y);
}
?>
</body>
</html>