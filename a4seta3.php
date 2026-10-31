<html>
<body>
<form method="post">
    Enter First Number:
    <input type="number" name="a" required><br><br>

    Enter Second Number:
    <input type="number" name="b" required><br><br>

    Enter Third Number:
    <input type="number" name="c" required><br><br>

    <input type="submit" name="submit" value="Find Maximum">
</form>

<?php
function Maximum($a, $b, $c)
{
    return max($a, $b, $c);
}

if (isset($_POST['submit']))
{
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    echo "Maximum Number: " . Maximum($a, $b, $c);
}
?>
</body>
</html>