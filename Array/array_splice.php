<?php
    $a = ["ajlal", "ali", "khan", "mohd"];
    $b = ["mohd", "ahmed"];
    array_splice($a, 2 , 0, $b);
    echo "<pre>";
    print_r($a);
    echo "</pre>";


?>