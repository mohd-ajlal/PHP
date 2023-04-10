<?php
    // Goto Statement
    // The goto statement is used to jump to another section of code.
    // The goto statement can be used to jump to a label in the same script.
    // Syntax:
    // goto label;
    // label:
    // code to be executed;
    
    for($i = 1; $i<=10; $i++){
        if($i == 4){
            goto end;
        }
        echo $i;
    }
    end:
    echo "Loop ended";


?>