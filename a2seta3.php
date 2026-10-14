<!DOCTYPE html>
<html>
<body>

<h2>Student Grade</h2>

<form method="POST">
    Enter Percentage:
    <input type="number" name="percentage"
           min="0" max="100" step="any" required>

    <input type="submit" name="submit" value="Check Grade">
</form>

<?php
if (isset($_POST['submit'])) {
    $p = $_POST['percentage'];

    if ($p < 0 || $p > 100) {
        echo "Invalid Percentage";
    } elseif ($p < 40) {
        echo "Grade = Fail";
    } elseif ($p < 50) {
        echo "Grade = Pass Class";
    } elseif ($p < 60) {
        echo "Grade = Higher Second Class";
    } elseif ($p < 70) {
        echo "Grade = First Class";
    } else {
        echo "Grade = First Class with Distinction";
    }
}
?>
</body>
</html>