<?php
    $arr = ["red", "blue", "green", "yellow", "black", "white"];
    for($i = 0; $i < count($arr); $i++){
        echo "<br>";
        echo "arr[$i] = ";
        echo $arr[$i];
    }
    echo "<br>";
    echo "<pre>"; // pre tag is used to print the array in a proper way.
    print_r($arr);
    echo "</pre>";

?>