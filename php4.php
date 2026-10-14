
<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter Length:
    <input type="number" name="l" step="any" required><br><br>

    Enter Breadth:
    <input type="number" name="b" step="any" required><br><br>

    Enter Height:
    <input type="number" name="h" step="any" required><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($_POST['submit'])) {
    $l = $_POST['l'];
    $b = $_POST['b'];
    $h = $_POST['h'];

    $s = 2 * (($l * $b) + ($l * $h) + ($b * $h));
    $v = $l * $b * $h;

    echo "Surface Area of Cuboid = " . $s . "<br>";
    echo "Volume of Cuboid = " . $v;
}
?>

</body>
</html>
