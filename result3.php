
<?php
$name = trim($_POST['name'] ?? '');
$address = trim($_POST['address'] ?? '');
$basic = $_POST['basic'] ?? '';
$da = $_POST['da'] ?? '';
$hra = $_POST['hra'] ?? '';

if ($name == '' || $address == '' ||
    $basic === '' || $da === '' || $hra === '') {
    die("All fields are required.");
}

if (!is_numeric($basic) || !is_numeric($da) ||
    !is_numeric($hra) || $basic < 0 || $da < 0 || $hra < 0) {
    die("Enter valid salary amounts.");
}

$total = $basic + $da + $hra;

echo "<h2>Employee Details</h2>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><td>Name</td><td>" . htmlspecialchars($name) . "</td></tr>";
echo "<tr><td>Address</td><td>" . htmlspecialchars($address) . "</td></tr>";
echo "<tr><td>Basic Salary</td><td>$basic</td></tr>";
echo "<tr><td>DA</td><td>$da</td></tr>";
echo "<tr><td>HRA</td><td>$hra</td></tr>";
echo "<tr><td>Total Salary</td><td>$total</td></tr>";
echo "</table>";
?>
