<?php
    $color = ["red", "green", "blue", "yellow", "yellow"];

    echo count($color)."<br>"; // 4
    echo sizeof($color)."<br>"; // 4

    $food = [
        'vegetables' => ['brinjal', ' brocolli', 'carrot'],
        'fruits' => ['orange', 'banana', 'apple'],
        'drinks' => ['water', 'milk'] 
    ];

    echo count($food, 1)."<br>"; // 11
    // echo sizeof($food, 1)."<br>"; // 11
    // 0 is default value of second parameter of count() and sizeof()
    // 1 is for recursive count
    echo sizeof($food)."<br>"; // 3
    echo sizeof($food['vegetables'], 1)."<br>"; // 11

    $len = count($food);

    for($i = 0; $i < $len; $i++){
        echo $color[$i]."<br>";
    }
    echo "<pre>";
    print_r(array_count_values($color));
    echo "</pre>";

?>