<?php
    // Array
    // Array is a variable that can store multiple values at once
    // Array is a special variable, which can hold more than one value at a time

    $array = array(1, 2, 3, 4, 5);
    // or $array = [1, 2, 3, 4, 5];
    echo "array = ";
    print_r($array);
    echo "<br>";
    $array_mul = array(1, 2, "3", true, true);
    // or $array_mul = [1, 2, "3", true, true];
    echo "array_mul = ";
    print_r($array_mul);
    echo "<br>";
    echo "array_mul[2] = ";
    echo $array_mul[2];
    echo "<br>";
    print_r($array_mul); // print_r() is used to print array
    echo "<br>";
    echo "<pre>";
    print_r($array_mul); // print_r() is used to print array
    echo "</pre>";

?>