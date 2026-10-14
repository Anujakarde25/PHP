<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter Radius of Circle:
    <input type="number" name="r" step="any" required><br><br>

    Enter Side of Square:
    <input type="number" name="s" step="any" required><br><br>

    Enter Length of Rectangle:
    <input type="number" name="l" step="any" required><br><br>

    Enter Breadth of Rectangle:
    <input type="number" name="b" step="any" required><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($_POST['submit'])) {
    $r = $_POST['r'];
    $s = $_POST['s'];
    $l = $_POST['l'];
    $b = $_POST['b'];

    $circle = 3.14 * $r * $r;
    $square = $s * $s;
    $rectangle = $l * $b;

    echo "Area of Circle = " . $circle . "<br>";
    echo "Area of Square = " . $square . "<br>";
    echo "Area of Rectangle = " . $rectangle;
}
?>

</body>
</html>
