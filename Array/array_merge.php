<?php
    $array = ["abc", "def", "ghi"];
    $array2 = ["jkl", "mno", "pqr"];
    
    $array_out =  array_merge($array, $array2);
    echo "<pre>";
    print_r($array_out);
    echo "</pre>";
?>