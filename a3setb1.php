
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

    Enter String 3:
    <input type="text" name="str3" required>
    <br><br>

    Select Operation:
    <select name="choice">
        <option value="1">Compare String 2 and String 3</option>
        <option value="2">Convert to Uppercase</option>
        <option value="3">Convert to Lowercase</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit']))
{
    $s1 = $_POST['str1'];
    $s2 = $_POST['str2'];
    $s3 = $_POST['str3'];

    switch($_POST['choice'])
    {
        case 1:
            if(strcmp($s2, $s3) == 0)
                echo "String 2 and String 3 are equal.";
            else
                echo "String 2 and String 3 are not equal.";
            break;

        case 2:
            echo strtoupper($s1) . "<br>";
            echo strtoupper($s2) . "<br>";
            echo strtoupper($s3);
            break;

        case 3:
            echo strtolower($s1) . "<br>";
            echo strtolower($s2) . "<br>";
            echo strtolower($s3);
            break;

        default:
            echo "Invalid Choice!";
    }
}
?>

</body>
</html>
