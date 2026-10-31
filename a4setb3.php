<html>
<body>
<form method="post">
    Enter Book ID:
    <input type="number" name="id" required><br><br>

    Enter Book Name:
    <input type="text" name="name" required><br><br>

    Enter Publication:
    <input type="text" name="publication" required><br><br>

    Enter Author:
    <input type="text" name="author" required><br><br>

    Enter Book Price:
    <input type="number" name="price" step="any" required><br><br>

    <input type="submit" name="submit" value="Display">
</form>

<?php
class Book
{
    public $Book_id, $Book_name, $Publication, $Author, $Book_price;

    function Accept()
    {
        $this->Book_id = $_POST['id'];
        $this->Book_name = $_POST['name'];
        $this->Publication = $_POST['publication'];
        $this->Author = $_POST['author'];
        $this->Book_price = $_POST['price'];
    }

    function Display()
    {
        echo "<h3>Book Details</h3>";
        echo "Book ID: " . $this->Book_id . "<br>";
        echo "Book Name: " . $this->Book_name . "<br>";
        echo "Publication: " . $this->Publication . "<br>";
        echo "Author: " . $this->Author . "<br>";
        echo "Book Price: " . $this->Book_price;
    }
}

if (isset($_POST['submit']))
{
    $b = new Book();
    $b->Accept();
    $b->Display();
}
?>
</body>
</html>