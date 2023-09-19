<?php
$num1 = 5;
$num2 = 10;

function multiplyNumbers()
{
    global $num1, $num2;
    $result = $num1 * $num2;
    echo "The multiplication of $num1 and $num2 is: $result";
}

multiplyNumbers();
?>