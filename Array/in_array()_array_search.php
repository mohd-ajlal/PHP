<?php
    $arr = ["abc", "def", "ghi", "jkh"];
    // in_array() returns 1/0
    // inarray(value, array);
    // array_search() returns index/key

    echo in_array("def", $arr); // returns 1
    echo "<br>";
    if(in_array("def", $arr)){
        echo "<b><i>"."Find Successfully"."</i></b>";
    }
    else{
        echo "Not Find Successfully";
    }

    echo "<br>";

    echo array_search("ghi", $arr); // returns 2(index of array)
    
    echo "<br>";

    $array1 = ["a" => 1, "b" => 2, "c" =>3];
    echo array_search(1, $array1); // returns a

?>