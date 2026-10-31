
<!DOCTYPE html>
<html>
<body>

<h2>Multidimensional Array</h2>

<form method="post">
    Enter Student Name:
    <input type="text" name="name" required>
    <br><br>

    Enter Roll Number:
    <input type="number" name="roll" required>
    <br><br>

    Enter Marks:
    <input type="number" name="marks" required>
    <br><br>

    Select Operation:
    <select name="choice">
        <option value="1">Display Array</option>
        <option value="2">Search Student</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit']))
{
    $students = array(
        array(
            "name" => $_POST['name'],
            "roll" => $_POST['roll'],
            "marks" => $_POST['marks']
        )
    );

    switch($_POST['choice'])
    {
        case 1:
            echo "<h3>Student Details:</h3>";

            foreach($students as $student)
            {
                foreach($student as $key => $value)
                {
                    echo $key . " : " . $value . "<br>";
                }
                echo "<br>";
            }
            break;

        case 2:
            $search = $_POST['name'];
            $found = false;

            foreach($students as $student)
            {
                if($student['name'] == $search)
                {
                    echo "Student Found!<br>";
                    echo "Name: " . $student['name'] . "<br>";
                    echo "Roll Number: " . $student['roll'] . "<br>";
                    echo "Marks: " . $student['marks'];
                    $found = true;
                }
            }

            if(!$found)
            {
                echo "Student Not Found!";
            }
            break;

        default:
            echo "Invalid Choice!";
    }
}
?>

</body>
</html>
