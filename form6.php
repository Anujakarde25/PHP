
<html>
<body>
<form method="POST" action="result6.php">
    Student Name:
    <input type="text" name="name" required><br><br>

    Select Languages:
    <select name="languages[]" multiple size="5" required>
        <option value="C">C</option>
        <option value="C++">C++</option>
        <option value="Java">Java</option>
        <option value="PHP">PHP</option>
        <option value="Python">Python</option>
    </select><br><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>
