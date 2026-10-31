
<?php
$name = trim($_POST['name'] ?? '');
$age = $_POST['age'] ?? '';

if ($name == '' || $age === '') {
    die("All fields are required.");
}

if (filter_var($age, FILTER_VALIDATE_INT,
    array("options" => array("min_range" => 0))) === false) {
    die("Please enter a valid age.");
}

$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');

if ($age < 18) {
    echo "Hello $name, you are not authorized to visit the site.";
} else {
    echo "Welcome $name to this site.";
}
?>
