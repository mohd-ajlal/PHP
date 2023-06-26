<!-- 
    Array Intersect
    1. array_intersect()
    2. array_intersect_key()
    3. array_intersect_assoc()
    4. array_intersect_uassoc()
    5. array_intersect_ukey()
    6. array_uintersect()
    7. array_intersect_assoc()
    8. array_intersect_uassoc()
 -->

<?php
    $a = [
        "a" => "red",
        "b" => "green",
        "c" => "blue",
        "d" => "yellow",
    ];
    
    $b = [
        "a" => "red",
        "f" => "green",
        "c" => "blue",
    ];

    $array_in = array_intersect($a, $b);
    echo "<pre>";
    print_r($array_in);
    echo "</pre>";

    $array_in_key = array_intersect_key($a, $b);
    echo "<pre>";
    print_r($array_in_key);
    echo "</pre>";

    $array_in_assoc = array_intersect_assoc($a, $b);
    echo "<pre>";
    print_r($array_in_assoc);
    echo "</pre>";

    function myfunction($a, $b) {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $array_in_uassoc = array_intersect_uassoc($a, $b, "myfunction");
    echo "<pre>";
    print_r($array_in_uassoc);
    echo "</pre>";

    $array_uin_assoc = array_uintersect_assoc($a, $b, "myfunction");
    echo "<pre>";
    print_r($array_uin_assoc);
    echo "</pre>";

    $array_uin_uassoc = array_uintersect_uassoc($a, $b, "myfunction", "myfunction");
    echo "<pre>";
    print_r($array_uin_uassoc);
    echo "</pre>";


?>