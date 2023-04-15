<?php
    $emp = [ 
        [1, "John", 1000],
        [2, "Smith", 2000],
        [3, "David", 3000]
    ];
    
    for($row = 0; $row <3; $row++){
        for($col = 0; $col <3; $col++){
            echo $emp[$row][$col]." ";
        }
        echo "<br>"; 
    }


?>