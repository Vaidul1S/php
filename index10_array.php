<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label for="">Enter Country</label>
        <input type="text" name="country">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
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
    // $capitals = array_flip($capitals);          //sukeicia key su values vietom
    
    foreach($capitals as $key => $value){
        echo"{$key} = {$value} <br>";
    }

    foreach($keys as $key){
        echo"{$key} <br>";
    }

    foreach($values as $value){
        echo"{$value} <br>";
    }

    $capital = $capitals[$_POST["country"]];

    echo $capital . "<br>";
?>