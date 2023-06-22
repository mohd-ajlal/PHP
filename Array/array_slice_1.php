<?php
    $array = [
        "a" => "abc",
        "b" => "def",
        "c" => "ghi",
        "d" => "jkl",
    ];

    $array_out = array_slice($array, 1, 2, true);
    echo "<pre>";
    print_r($array_out);
    echo "</pre>";

?>