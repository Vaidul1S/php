<?php
    // logic operators || && !

    $temp = 42;
    $cloudy = false;
   
    if($temp >= 0 && $temp <= 30){
        echo"The weather is wormish <br>";
    } elseif ($temp >= 30){
        echo"It's hot outside. <br>";
    } else {
        echo"The weather is coldish <br>";
    }

    if ($cloudy) {
        echo"It's cloudy. <br>";
    } else {
        echo"It's sunny. <br>";
    }
        
    echo "Tempature is {$temp} C <br>";

    $child = true;
    $senior = false;
    $ticket = null;

    if($child || $senior) {
        $ticket = 10;
    } else {
        $ticket = 20;
    }

    echo"The ticket price is \${$ticket}<br>";
    
?>