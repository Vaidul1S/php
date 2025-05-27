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
    
    echo count($foods) . "<br>";

    $capitals = array("Lithuania" => "Vilnius", 
                      "South Korea" => "Seoul", 
                      "Latvia"=> "Ryga", 
                      "Italy" => "Rome", 
                      "Canada" => "Otawa");

    echo $capitals["Italy"] . "<br>";

    $capitals["China"] = "Beijing";
    $keys = array_keys($capitals);
    $values = array_values($capitals);
    $capitals = array_flip($capitals);          //sukeicia key su values vietom
    
    foreach($capitals as $key => $value){
        echo"{$key} = {$value} <br>";
    }

    foreach($keys as $key){
        echo"{$key} <br>";
    }

    foreach($values as $value){
        echo"{$value} <br>";
    }
?>