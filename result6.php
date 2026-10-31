
<?php
$name = trim($_POST['name'] ?? '');
$languages = $_POST['languages'] ?? array();

if ($name == '' || !is_array($languages) || count($languages) == 0) {
    die("Please enter name and select languages.");
}

echo "<h2>Student Details</h2>";
echo "Name: " . htmlspecialchars($name) . "<br>";
echo "Programming Languages:<ul>";

foreach ($languages as $language) {
    echo "<li>" . htmlspecialchars($language) . "</li>";
}

echo "</ul>";
?>
