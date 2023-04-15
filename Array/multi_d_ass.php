<?php

    $marks = [
        "John" => [
            "physics" => 35,
            "maths" => 30,
            "chemistry" => 39
        ],
        "Smith" => [
            "physics" => 30,
            "maths" => 32,
            "chemistry" => 29
        ],
        "David" => [
            "physics" => 31,
            "maths" => 22,
            "chemistry" => 39
        ]
    ];
    foreach ($marks as $key => $v1) {
        echo $key . "<br>";
        foreach ($v1 as $key => $v2) {
            echo $key . " = " . $v2 . "<br>";
        }
        echo "<br>"; 

    }
?>