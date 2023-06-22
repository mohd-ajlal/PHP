<?php
    $array1 = ["abc", "def", "ghi"];
    $array2 = ["jkl", "mno", "pqr"];
    $array_out =  array_combine($array1, $array2);
    echo "<pre>";
    print_r($array_out);
    echo "</pre>";

?>