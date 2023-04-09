<?php
    // Comparison Operators
    // ==, ===, !=, <>, !==, >, <, >=, <=, <=>
    // ==, !=, <>, <=>
    // ===, !==

    $a = 10;
    $b = 2;
    $c = "10";

    var_dump($a == $b);
    echo "<br>";
    var_dump($a == $c);
    echo "<br>";
    var_dump($a != $b);
    echo "<br>";
    var_dump($a != $c);
    echo "<br>";
    var_dump($a <> $b);
    echo "<br>";
    var_dump($a <> $c);
    echo "<br>";
    var_dump($a !== $b);
    echo "<br>";
    var_dump($a !== $c);
    echo "<br>";
    var_dump($a === $b);
    echo "<br>";
    var_dump($a === $c);
    echo "<br>";
    var_dump($a > $b);
    echo "<br>";
    var_dump($a < $b);
    echo "<br>";
    var_dump($a >= $b);
    echo "<br>";
    var_dump($a <= $b);
    echo "<br>";
    var_dump($a <=> $b);
    echo "<br>";
    var_dump($a <=> $c);
    echo "<br>";
    var_dump($a <=> $a);
    echo "<br>";
    var_dump($b <=> $a);
    echo "<br>";
    var_dump($c <=> $a);
    echo "<br>";
    var_dump($a <=> $c);
    echo "<br>";
    var_dump($a <=> $a);
    echo "<br>";
    

?>