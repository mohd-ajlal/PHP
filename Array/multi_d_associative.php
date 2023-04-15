<?php
    // Multi-dimensional associative array
    // $marks = array(
    //     "John" => array(
    //         "physics" => 35,
    //         "maths" => 30,
    //         "chemistry" => 39
    //     ),
    //     "Smith" => array(
    //         "physics" => 30,
    //         "maths" => 32,
    //         "chemistry" => 29
    //     ),
    //     "David" => array(
    //         "physics" => 31,
    //         "maths" => 22,
    //         "chemistry" => 39
    //     )
    // );

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
    echo "<pre>";
    print_r($marks);
    echo "</pre>";
?>