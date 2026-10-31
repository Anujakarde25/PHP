<html>
<body>
<form method="post">
    <input type="submit" name="submit" value="Display Numbers">
</form>

<?php
function EvenOdd()
{
    echo "<h3>Even Numbers:</h3>";

    for ($i = 1; $i <= 50; $i++)
    {
        if ($i % 2 == 0)
        {
            echo $i . " ";
        }
    }

    echo "<h3>Odd Numbers:</h3>";

    for ($i = 1; $i <= 50; $i++)
    {
        if ($i % 2 != 0)
        {
            echo $i . " ";
        }
    }
}

if (isset($_POST['submit']))
{
    EvenOdd();
}
?>
</body>
</html>