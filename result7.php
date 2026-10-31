
<?php
$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$age = $_POST['age'] ?? '';

if ($username == '' || $email == '' || $age === '') {
    die("All fields are required.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address.");
}

if (filter_var($age, FILTER_VALIDATE_INT,
    array("options" => array("min_range" => 1))) === false) {
    die("Invalid age.");
}

echo "<h2>User Details</h2>";
echo "Username: " . htmlspecialchars($username) . "<br>";
echo "Email: " . htmlspecialchars($email) . "<br>";
echo "Age: " . htmlspecialchars($age) . "<br>";
echo "All data is valid.";
?>
