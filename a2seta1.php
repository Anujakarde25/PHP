<!DOCTYPE html>
<html>
<body>

<h2>Check Leap Year</h2>

<form method="POST">
    Enter Year:
    <input type="number" name="year" required>
    <input type="submit" name="submit" value="Check">
</form>

<?php
if (isset($_POST['submit'])) {
    $year = $_POST['year'];

    if (($year % 400 == 0) ||
        ($year % 4 == 0 && $year % 100 != 0)) {
        echo "$year is a Leap Year";
    } else {
        echo "$year is Not a Leap Year";
    }
}
?>

</body>
</html>