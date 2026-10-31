
<?php
$customer = trim($_POST['customer'] ?? '');
$q1 = $_POST['q1'] ?? '';
$q2 = $_POST['q2'] ?? '';
$q3 = $_POST['q3'] ?? '';

if ($customer == '' || $q1 === '' || $q2 === '' || $q3 === '') {
    die("All fields are required.");
}

foreach (array($q1, $q2, $q3) as $q) {
    if (!ctype_digit((string)$q)) {
        die("Enter valid quantities.");
    }
}

$products = array(
    array("Pen", 10, (int)$q1),
    array("Notebook", 50, (int)$q2),
    array("Pencil", 5, (int)$q3)
);

$total = 0;

echo "Customer: " . htmlspecialchars($customer);
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>Product</th><th>Rate</th><th>Quantity</th><th>Price</th></tr>";

foreach ($products as $p) {
    $amount = $p[1] * $p[2];
    $total += $amount;

    echo "<tr><td>$p[0]</td><td>$p[1]</td><td>$p[2]</td><td>$amount</td></tr>";
}

echo "<tr><th colspan='3'>Grand Total</th><th>$total</th></tr>";
echo "</table>";
?>
