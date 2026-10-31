<html>
<body>
<form method="post">
    <input type="submit" name="submit" value="Display Day">
</form>

<?php
function DisplayDay()
{
    echo "Today is: " . date("l");
}

if (isset($_POST['submit']))
{
    DisplayDay();
}
?>
</body>
</html>