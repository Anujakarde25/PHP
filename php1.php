
<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter first number:
    <input type="number" name="a" required><br><br>

    Enter second number:
    <input type="number" name="b" required><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    if ($b != 0) {
        echo "Quotient = " . intdiv($a, $b) . "<br>";
        echo "Remainder = " . ($a % $b);
    } else {
        echo "Division by zero is not allowed.";
    }
}
?>

</body>
</html>
