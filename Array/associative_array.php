<?php
    // Associative array
    // $ a = [key => value, key => value, key => value];
    // Example:
    // $a = [10, 20, 30];
    // $a = ["a" => 10, "b" => 20, "c" => 30];

    $a = ["a" => 10, "b" => 20, "c" => 30];
    echo "<ul>";
    foreach($a as $key => $value) {
        echo "<li>" . $key . " => " . $value . "</li>";
    }
    echo "</ul>";

?>