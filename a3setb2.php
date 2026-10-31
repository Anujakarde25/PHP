
<!DOCTYPE html>
<html>
<body>

<h2>String Operations</h2>

<form method="post">
    Enter String 1:
    <input type="text" name="str1" required>
    <br><br>

    Enter String 2:
    <input type="text" name="str2" required>
    <br><br>

    Select Operation:
    <select name="choice">
        <option value="1">Convert Each Word to Lowercase and Uppercase</option>
        <option value="2">Find First and Last Occurrence</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit']))
{
    $s1 = $_POST['str1'];
    $s2 = $_POST['str2'];

    switch($_POST['choice'])
    {
        case 1:
            echo "Lowercase: " . strtolower($s1) . "<br>";
            echo "Uppercase: " . strtoupper($s1);
            break;

        case 2:
            $first = strpos($s1, $s2);
            $last = strrpos($s1, $s2);

            if($first !== false)
            {
                echo "First occurrence position: " . $first . "<br>";
                echo "Last occurrence position: " . $last;
            }
            else
            {
                echo "String 2 not found in String 1.";
            }
            break;

        default:
            echo "Invalid Choice!";
    }
}
?>

</body>
</html>
