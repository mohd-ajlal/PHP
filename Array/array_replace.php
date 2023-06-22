<?php
    $arr = ["abc", "def", "ghi", "jkh"];
    $arr2 = ["ajlal","mohd"];
    $arr3 = ["xyz"];
    $arr_out = array_replace($arr, $arr2, $arr3);
    echo "<pre>";
    print_r($arr_out);
    echo "</pre>";

    $arr_new1 = [
        "a" => ["a1", "a2", "a3"],
        "b" => ["b1", "b2", "b3"],
        "c" => ["c1", "c2", "c3"]
    ];
    $arr_new2 = [
        "a" => ["a4", "a5"],
        "b" => ["b4", "b5"],
        "c" => ["c4", "c5"]
    ];

    $arr_new_out = array_replace_recursive($arr_new1, $arr_new2);
    echo "<br>";
    echo "<pre>";
    print_r($arr_new_out);
    echo "</pre>";
?>