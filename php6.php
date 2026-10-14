
<!DOCTYPE html>
<html>
<body>

<form method="post">
    Data Structure:
    <input type="number" name="ds" min="0" max="100" required><br><br>

    Digital Marketing:
    <input type="number" name="dm" min="0" max="100" required><br><br>

    PHP:
    <input type="number" name="php" min="0" max="100" required><br><br>

    SE:
    <input type="number" name="se" min="0" max="100" required><br><br>

    Bigdata:
    <input type="number" name="bd" min="0" max="100" required><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($_POST['submit'])) {
    $ds = $_POST['ds'];
    $dm = $_POST['dm'];
    $php = $_POST['php'];
    $se = $_POST['se'];
    $bd = $_POST['bd'];

    $total = $ds + $dm + $php + $se + $bd;
    $percentage = ($total / 500) * 100;

    echo "Total Marks = " . $total . " / 500<br>";
    echo "Percentage = " . $percentage . "%";
}
?>

</body>
</html>
