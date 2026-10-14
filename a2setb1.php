<!DOCTYPE html>
<html>
<body>

<h2>Prime Numbers</h2>

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

    echo "Prime Numbers:<br>";

    for ($n = $start; $n <= $end; $n++) {
        if ($n < 2) {
            continue;
        }

        $prime = true;

        for ($i = 2; $i * $i <= $n; $i++) {
            if ($n % $i == 0) {
                $prime = false;
                break;
            }
        }

        if ($prime) {
            echo $n . " ";
        }
    }
}
?>
</body>
</html>