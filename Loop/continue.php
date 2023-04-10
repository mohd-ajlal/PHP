<?php
    // Continue Statement'
    // The continue statement is used to skip the current iteration of a loop.
    // The continue statement can be used in both while and for loops.
    // The continue statement can be used to skip the current iteration of a loop, and continue with the next iteration.

    for($i = 1; $i<=10; $i++){
        if($i == 4){
            continue;
        }
        echo $i;
    }


?>