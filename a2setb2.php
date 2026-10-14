<!DOCTYPE html>
<html>
<body>

<h2>Perfect Numbers</h2>

<form method="POST">
    Enter Starting Number:
    <input type="number" name="start" required><br><br>

    Enter Ending Number:
    <input type="number" name="end" required><br><br>

    <input type="submit" name="submit" value="Display">
</form>

<?php
if (isset($_POST['submit'])) {
    $start = $_POST['start'];
    $end = $_POST['end'];

    echo "Perfect Numbers:<br>";

    for ($n = max(2, $start); $n <= $end; $n++) {
        $sum = 0;

        for ($i = 1; $i <= $n / 2; $i++) {
            if ($n % $i == 0) {
                $sum += $i;
            }
        }

        if ($sum == $n) {
            echo $n . " ";
        }
    }
}
?>

</body>
</html>