<!-- PHP key function

    array_keys()
    array_key_first()
    array_key_last()
    array_key_exists()
    key_exists()
-->

<?php
    $color = ["red", "green", "blue", "yellow"];
    $new = array_keys($color);
    echo "<pre>";
    print_r($new);
    echo "</pre>";

    $color_new = [
        "red" => "#ff0000",
        "green" => "#00ff00",
        "blue" => "#0000ff",
        "yellow" => "#ffff00",
    ];
    
    $new1 = array_keys($color_new);
    echo "<pre>";
    print_r($new1);
    echo "</pre>";

    $new2 = array_keys($color_new, "#00ff00");
    echo "<pre>";
    print_r($new2);
    echo "</pre>";

    $new3 = array_key_first($color_new);
    // echo "<pre>";
    echo $new3;
    // echo "</pre>";

    echo "<br>";

    $new4 = array_key_last($color_new);
    echo $new4;

    echo "<br>";

    $new5 = array_key_exists("red", $color_new);
    echo $new5;

    echo "<br>";

    $new6 = key_exists("red", $color_new);
    echo $new6;
    

?>