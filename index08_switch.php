<?php
    // switch statements

    $grade = "pizza";

    switch($grade){
        case "A";
            echo"You did great<br>";
            break;
        case "B";
            echo"You did good<br>";
            break;
        case "C";
            echo"You did OK<br>";
            break;
        case "D";
            echo"You did poorly<br>";
            break;        
        case "F";
            echo"You fail this City<br>";
            break;
        default:
            echo"Your grade may be eateble but it's not valid<br>";
    }   

    echo"Your grade is {$grade} <br>";

?>