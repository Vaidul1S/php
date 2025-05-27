<?php
    // array

    $food_1 = "pizza";
    $food_2 = "apple";
    $food_3 = "cookie";
    $food_4 = "orange";
    $food_5 = "blueberry";
    
    $foods = array("pizza", "apple", "cookie", "orange", "blueberry");
    
    echo $foods[0] . "<br>";
    echo $foods[4] . "<br>";

    $foods[4] = "pineapple";
    array_push($foods, "banana", "kiwi");
    array_pop($foods);                          //istrina paskutini
    array_shift($foods);                        //istrina pirma
    $foods = array_reverse($foods);             //sukuria nauja atvirkstini masyva(array), todel naujas priskirimas

    foreach($foods as $food){
        echo $food . "<br>";
    }
    
    echo count($foods);

?>