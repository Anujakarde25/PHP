<html>
<body>
<form method="post">
    Enter Fruit Name:
    <input type="text" name="name" required><br><br>

    Enter Color:
    <input type="text" name="color" required><br><br>

    Enter Price:
    <input type="number" name="price" step="any" required><br><br>

    <input type="submit" name="submit" value="Display">
</form>

<?php
class Fruit
{
    public $Name, $Color, $Price;

    function Accept($name, $color, $price)
    {
        $this->Name = $name;
        $this->Color = $color;
        $this->Price = $price;
    }

    function Display()
    {
        echo "<h3>Fruit Details</h3>";
        echo "Name: " . $this->Name . "<br>";
        echo "Color: " . $this->Color . "<br>";
        echo "Price: " . $this->Price;
    }
}

if (isset($_POST['submit']))
{
    $f = new Fruit();

    $f->Accept(
        $_POST['name'],
        $_POST['color'],
        $_POST['price']
    );

    $f->Display();
}
?>
</body>
</html>