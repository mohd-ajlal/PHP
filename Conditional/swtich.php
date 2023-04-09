<?php
    // switch statement
    // switch(variable)
    // {
    //     case value1:
    //         // code to be executed if variable is equal to value1
    //         break;
    //     case value2:
    //         // code to be executed if variable is equal to value2
    //         break;
    //     case value3:
    //         // code to be executed if variable is equal to value3
    //         break;
    //     default:
    //         // code to be executed if variable is not equal to any of the values
    // }
    $a = 10;
    switch($a)
    {
        case 10:
            echo "a is equal to 10";
            break;
        case 20:
            echo "a is equal to 20";
            break;
        case 30:
            echo "a is equal to 30";
            break;
        default:
            echo "a is not equal to 10, 20 or 30";
    }


?>