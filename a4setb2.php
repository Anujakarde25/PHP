<html>
<body>
<form method="post">
    Enter Roll Number:
    <input type="number" name="roll" required><br><br>

    Enter Student Name:
    <input type="text" name="name" required><br><br>

    Enter Percentage:
    <input type="number" name="percentage" min="0" max="100" step="any" required><br><br>

    <input type="submit" name="submit" value="Display">
</form>

<?php
class Student
{
    public $Roll_Number, $Stud_Name, $Percentage;

    function Accept()
    {
        $this->Roll_Number = $_POST['roll'];
        $this->Stud_Name = $_POST['name'];
        $this->Percentage = $_POST['percentage'];
    }

    function Display()
    {
        echo "<h3>Student Details</h3>";
        echo "Roll Number: " . $this->Roll_Number . "<br>";
        echo "Student Name: " . $this->Stud_Name . "<br>";
        echo "Percentage: " . $this->Percentage . "%";
    }
}

if (isset($_POST['submit']))
{
    $s = new Student();
    $s->Accept();
    $s->Display();
}
?>
</body>
</html>