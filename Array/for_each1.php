<?php
    // For each loop
    // foreach($array as $key => $value) {
    //     // code
    // }

    // $array1 = [10,20,30];
    // foreach($array1 as $value){
    //     echo $value . "<br>";  
    // }

    $array2 = ["a" => 10, "b" => 20, "c" => 30];

    foreach($array2 as $key => $value){
        // echo "<li>";
        echo "<li>" . $key . " = " . $value . "</li>";
        // echo "</li>";
    }

?>