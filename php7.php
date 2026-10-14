
<!DOCTYPE html>
<html>
<body>

<h2>Air Ticket Reservation</h2>

<form method="post">
    Name:
    <input type="text" name="name" required><br><br>

    Address:
    <textarea name="address" required></textarea><br><br>

    Contact No:
    <input type="tel" name="contact" required><br><br>

    Source:
    <input type="text" name="source" required><br><br>

    Destination:
    <input type="text" name="destination" required><br><br>

    Date of Journey:
    <input type="date" name="date" required><br><br>

    Gender:
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other
    <br><br>

    No. of Persons:
    <input type="number" name="persons" min="1" required><br><br>

    Price per Ticket:
    <input type="number" name="price" min="0" step="any" required><br><br>

    <input type="submit" name="submit" value="Book Ticket">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $persons = $_POST['persons'];
    $price = $_POST['price'];

    $total = $persons * $price;

    echo "<h2>Reservation Details</h2>";
    echo "Name: $name <br>";
    echo "Address: $address <br>";
    echo "Contact No: $contact <br>";
    echo "Source: $source <br>";
    echo "Destination: $destination <br>";
    echo "Date of Journey: $date <br>";
    echo "Gender: $gender <br>";
    echo "No. of Persons: $persons <br>";
    echo "Price per Ticket: ₹$price <br>";
    echo "Total Cost: ₹$total";
}
?>

</body>
</html>
