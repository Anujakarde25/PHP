
<?php
$answers = array("q1" => "b", "q2" => "a", "q3" => "b");
$questions = array(
    "Symbol before a PHP variable?",
    "Function used to display output?",
    "Method that sends data in the request body?"
);

$total = 0;
echo "<h2>Result</h2>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>Question</th><th>Marks</th></tr>";

$i = 0;
foreach ($answers as $key => $answer) {
    $user = $_POST[$key] ?? '';
    $marks = ($user == $answer) ? 1 : 0;
    $total += $marks;

    echo "<tr><td>" . $questions[$i] . "</td><td>$marks</td></tr>";
    $i++;
}

echo "<tr><th>Total Marks</th><th>$total / 3</th></tr>";
echo "</table>";
?>
