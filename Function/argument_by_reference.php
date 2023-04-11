<?php
    function sum(&$a, $b){
        $a = $a + $b;
    }

    $a = 5;
    $b = 10;
    sum($a, $b);
    echo $a;

    // Difference between passing argument by value and by reference
    // is that when you pass argument by value, the value of the
    // variable is copied and passed to the function. So, if you
    // change the value of the variable inside the function, it
    // will not affect the value of the variable outside the
    // function. But, when you pass argument by reference, the
    // value of the variable is not copied, but the reference to
    // the variable is passed to the function. So, if you change
    // the value of the variable inside the function, it will
    // affect the value of the variable outside the function.

?>