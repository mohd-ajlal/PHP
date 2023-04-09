<?php
    // Logical Operators
    // &&, ||, !, and, or, xor
    // && and and are same
    // || and or are same
    // ! is not
    // xor is exclusive or
    $a = 10;
    $b = 20;

    if($a > 5 && $b > 10)
    {
        echo "a is greater than 5 and b is greater than 10";
    }
    echo "<br>";
    if($a > 5 || $b > 10)
    {
        echo "a is greater than 5 or b is greater than 10";
    }
    echo "<br>";
    if($a > 5 xor $b > 10)
    {
        echo "a is greater than 5 or b is greater than 10 but not both";
    }
    echo "<br>";
    if(!($a > 5))
    {
        echo "a is not greater than 5";
    }
    echo "<br>";
    if($a > 5 and $b > 10)
    {
        echo "a is greater than 5 and b is greater than 10";
    }
    echo "<br>";
    if($a > 5 or $b > 10)
    {
        echo "a is greater than 5 or b is greater than 10";
    }
    echo "<br>";



?>