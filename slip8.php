Write a PHP Script to display a perfect numbers between 1 to100. 

<?php
echo "Perfect numbers between 1 to 100 are:<br>";

for ($num = 1; $num <= 100; $num++)
{
    $sum = 0;
    for ($i = 1; $i < $num; $i++)
    {
        if ($num % $i == 0)
        {
            $sum = $sum + $i;
        }
    }
    if ($sum == $num)
    {
        echo $num . "<br>";
    }
}
?>
