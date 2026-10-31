
<?php
$font = htmlspecialchars($_POST['font'], ENT_QUOTES, 'UTF-8');
$color = $_POST['bgcolor'];
$msg = htmlspecialchars($_POST['msg'], ENT_QUOTES, 'UTF-8');

$colors = array("red", "blue", "green", "yellow",
                "pink", "white", "black");

if (!in_array(strtolower($color), $colors)) {
    $color = "white";
}

echo "<body style='background-color:$color;'>";
echo "<h1 style='font-family:$font;'>$msg</h1>";
echo "</body>";
?>
