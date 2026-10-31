
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
        <option value="1">Replace String 2 with String 3</option>
        <option value="2">Reverse String 1</option>
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
            echo "Replaced String: " . str_replace($s2, $s3, $s1);
            break;

        case 2:
            echo "Reversed String: " . strrev($s1);
            break;

        default:
            echo "Invalid Choice!";
    }
}
?>

</body>
</html>
