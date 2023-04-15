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
    echo "<table border = '2px' cellpadding = '5x' cellspacing = '0px'>
    <tr>
        <th>Student Name</th>
        <th>Physics</th>
        <th>Maths</th>
        <th>Chemistry</th>
    </tr>
    "; 
    foreach ($marks as $key => $v1) {
        echo "<tr><td> $key </td>";
        foreach ($v1 as $v2) {
            echo "<td>$v2 </td>";
        }
        echo "</tr  >"; 

    }
    echo "</table>";
?>