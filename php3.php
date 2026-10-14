
<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter temperature in Celsius:
    <input type="number" name="c" step="any" required><br><br>

    <input type="submit" name="submit" value="Convert">
</form>

<?php
if (isset($_POST['submit'])) {
    $c = $_POST['c'];

    $f = ($c * 9 / 5) + 32;

    echo "Temperature in Celsius = " . $c . "°C<br>";
    echo "Temperature in Fahrenheit = " . $f . "°F";
}
?>

</body>
</html>
