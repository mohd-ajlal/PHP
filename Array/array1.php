<?php
    // Arary
    // Array is a variable that can store multiple values at once.
    // Array is a special varable which can store more than one value ta a time.

    $arr = array(1,2,3,4,5);
    // or $arr = [1,2,3,4,5];
    // echo "arr = ";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";


    for($i=0; $i<count($arr); $i++){
        echo "<br>";
        echo "arr[$i] = ";
        echo $arr[$i];
    }

?>