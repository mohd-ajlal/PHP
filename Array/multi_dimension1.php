<?php
    $multi = [
        [1, "abc", 10.5],
        [2, "def", 20.5],
        [3, "ghi", 30.5]
    ];

    echo $multi[0][0]."<br>"; // 1
    echo $multi[0][1]."<br>"; // abc
    echo $multi[0][2]."<br>"; // 10.5

    $multi_asso = [
        "a" => [1, "abc", 10.5],
        "b" => [2, "def", 20.5],
        "c" => [3, "ghi", 30.5]
    ];

    echo $multi_asso["a"][0]."<br>"; // 1
    echo "<br><pre>";
    print_r($multi_asso);
    echo "</pre><br>";
    echo "<table border = '2px' cellpadding = '5px' cellpadding = '0'>
        <tr>
            <th> Key </th>
            <th> Value </th>
            <th> Value </th>
            <th> Value </th>
        </tr>
        ";
    foreach($multi_asso as $key => $v1){
        echo "<tr> 
        <td> $key  </td>";
        foreach($v1 as $v2){
            echo  "<td> $v2 </td>";
        }
        echo "</tr>";
    }

?>