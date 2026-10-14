
<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter first number:
    <input type="number" name="a" required><br><br>

    Enter second number:
    <input type="number" name="b" required><br><br>

    <input type="submit" name="submit" value="Swap">
</form>

<?php
if (isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    echo "Before Swapping:<br>";
    echo "A = $a <br>";
    echo "B = $b <br>";

    $temp = $a;
    $a = $b;
    $b = $temp;

    echo "<br>After Swapping:<br>";
    echo "A = $a <br>";
    echo "B = $b";
}
?>

</body>
</html>
