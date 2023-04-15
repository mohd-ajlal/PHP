<?php
    $array1 = ["abc", "def", "ghi"];
    echo "<ul>";
    for($i = 0; $i < count($array1); $i++) {
        echo "<li>" . $array1[$i] . "</li>";
    }
    echo "</ul>";

?>