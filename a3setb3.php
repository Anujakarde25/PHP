
<!DOCTYPE html>
<html>
<body>

<h2>Associative Array Operations</h2>

<form method="post">
    Enter Array 1 keys (comma separated):
    <input type="text" name="keys1" required>
    <br><br>

    Enter Array 1 values (comma separated):
    <input type="text" name="values1" required>
    <br><br>

    Enter Array 2 keys (comma separated):
    <input type="text" name="keys2" required>
    <br><br>

    Enter Array 2 values (comma separated):
    <input type="text" name="values2" required>
    <br><br>

    Select Operation:
    <select name="choice">
        <option value="1">Sort Values in Ascending Order (Change Keys)</option>
        <option value="2">Sort Values in Descending Order (Change Keys)</option>
        <option value="3">Sort Values in Ascending Order (Preserve Keys)</option>
        <option value="4">Sort Values in Descending Order (Preserve Keys)</option>
        <option value="5">Intersection of Two Arrays</option>
        <option value="6">Union of Two Arrays</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit']))
{
    $k1 = explode(",", $_POST['keys1']);
    $v1 = explode(",", $_POST['values1']);
    $k2 = explode(",", $_POST['keys2']);
    $v2 = explode(",", $_POST['values2']);

    if(count($k1) != count($v1) || count($k2) != count($v2))
    {
        echo "Keys and values must have equal elements.";
    }
    else
    {
        $a = array_combine($k1, $v1);
        $b = array_combine($k2, $v2);

        switch($_POST['choice'])
        {
            case 1:
                asort($a);
                $a = array_values($a);
                print_r($a);
                break;

            case 2:
                arsort($a);
                $a = array_values($a);
                print_r($a);
                break;

            case 3:
                asort($a);
                print_r($a);
                break;

            case 4:
                arsort($a);
                print_r($a);
                break;

            case 5:
                echo "Intersection:<br>";
                print_r(array_intersect($a, $b));
                break;

            case 6:
                echo "Union:<br>";
                print_r($a + $b);
                break;

            default:
                echo "Invalid Choice!";
        }
    }
}
?>

</body>
</html>
