
<!DOCTYPE html>
<html>
<body>

<h2>Associative Array Operations</h2>

<form method="post">
    Enter keys (comma separated):
    <input type="text" name="keys" required>
    <br><br>

    Enter values (comma separated):
    <input type="text" name="values" required>
    <br><br>

    Select Operation:
    <select name="choice">
        <option value="1">Display Elements with Keys</option>
        <option value="2">Display Array Size</option>
        <option value="3">Delete Element by Index</option>
        <option value="4">Reverse Key-Value Pairs</option>
    </select>
    <br><br>

    Enter index to delete (for operation 3):
    <input type="number" name="idx">
    <br><br>

    <input type="submit" name="submit" value="Perform Operation">
</form>

<?php
if(isset($_POST['submit']))
{
    $k = explode(",", $_POST['keys']);
    $v = explode(",", $_POST['values']);

    if(count($k) != count($v))
    {
        echo "Keys and values must have equal elements.";
    }
    else
    {
        $arr = array_combine($k, $v);

        echo "<h3>Result:</h3>";

        switch($_POST['choice'])
        {
            case 1:
                foreach($arr as $key => $value)
                {
                    echo "$key : $value <br>";
                }
                break;

            case 2:
                echo "Size of array = " . count($arr);
                break;

            case 3:
                $keys = array_keys($arr);
                $idx = $_POST['idx'];

                if($idx >= 0 && $idx < count($arr))
                {
                    $delkey = $keys[$idx];
                    unset($arr[$delkey]);

                    foreach($arr as $key => $value)
                    {
                        echo "$key : $value <br>";
                    }
                }
                else
                {
                    echo "Invalid index!";
                }
                break;

            case 4:
                $arr = array_reverse($arr, true);

                foreach($arr as $key => $value)
                {
                    echo "$key : $value <br>";
                }
                break;

            default:
                echo "Invalid choice!";
        }
    }
}
?>

</body>
</html>
