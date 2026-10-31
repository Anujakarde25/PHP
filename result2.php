
<?php
$name = trim($_POST['name'] ?? '');
$address = trim($_POST['address'] ?? '');
$pincode = trim($_POST['pincode'] ?? '');
$gender = trim($_POST['gender'] ?? '');

if ($name == "" || $address == "" ||
    $pincode == "" || $gender == "") {
    echo "All fields are required.";
} elseif (!preg_match('/^[0-9]{6}$/', $pincode)) {
    echo "Invalid Pincode.";
} else {
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Address: " . htmlspecialchars($address) . "<br>";
    echo "Pincode: " . htmlspecialchars($pincode) . "<br>";
    echo "Gender: " . htmlspecialchars($gender);
}
?>
