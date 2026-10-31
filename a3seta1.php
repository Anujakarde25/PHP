
<!DOCTYPE html>
<html>
<head>
    <title>Indexed Array Operations</title>
</head>
<body>

<h2>Indexed Array Operations</h2>

<form method="post" action="">
    Enter first array elements (comma separated):
    <input type="text" name="arr1" required>
    <br><br>

    Enter second array elements (comma separated):
    <input type="text" name="arr2" required>
    <br><br>

    Select Operation:
    <select name="operation">
        <option value="union">Union of Two Arrays</option>
        <option value="random">Random Order Traversal</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Perform Operation">
</form>

<?php
if (isset($_POST['submit'])) {

    $a = array_map('trim', explode(',', $_POST['arr1']));
    $b = array_map('trim', explode(',', $_POST['arr2']));

    switch ($_POST['operation']) {

        case "union":
            $result = array_values(array_unique(array_merge($a, $b)));

            echo "<h3>Union of Two Arrays:</h3>";
            print_r($result);
            break;

        case "random":
            $result = $a;
            shuffle($result);

            echo "<h3>Array Elements in Random Order:</h3>";
            foreach ($result as $value) {
                echo $value . "<br>";
            }
            break;

        default:
            echo "Invalid operation selected.";
    }
}
?>

</body>
</html>
