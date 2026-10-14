<!DOCTYPE html>
<html>
<body>

<h2>Simple Calculator</h2>

<form method="POST">
    Enter First Number:
    <input type="number" name="n1" step="any" required><br><br>

    Enter Second Number:
    <input type="number" name="n2" step="any" required><br><br>

    Select Operation:
    <select name="op">
        <option value="1">Addition</option>
        <option value="2">Subtraction</option>
        <option value="3">Multiplication</option>
        <option value="4">Division</option>
    </select><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($_POST['submit'])) {
    $a = $_POST['n1'];
    $b = $_POST['n2'];
    $op = $_POST['op'];

    switch ($op) {
        case 1:
            echo "Addition = " . ($a + $b);
            break;

        case 2:
            echo "Subtraction = " . ($a - $b);
            break;

        case 3:
            echo "Multiplication = " . ($a * $b);
            break;

        case 4:
            if ($b != 0) {
                echo "Division = " . ($a / $b);
            } else {
                echo "Division by zero is not possible.";
            }
            break;

        default:
            echo "Invalid Operation";
    }
}
?>

</body>
</html>