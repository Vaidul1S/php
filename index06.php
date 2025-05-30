<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Methods</title>
</head>

<body>    
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">        
        <label>Age:</label>
        <input type="text" name="age">        
        <input type="submit" value="try">
    </form>
</body>

</html>

<?php
    // if statements

    $age = $_POST["age"];
   
    if ($age >= 18) {
        echo "You may enter <br>";  
    } else if ($age == 0) {
        echo "You were just born";
    } else {
        echo "You must be 18+ <br>";  
    }

    $result = match($age){
        18 => "Pilnaprotis<br>",
        65 => "Pensininkas<br>",
        default => "No match<br>",
    };

    echo $result;  

    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if ($hours <= 0) {
        $weekly_pay = 0;
    } elseif ($hours <= 40){
        $weekly_pay = $hours * $rate;
    } else {
        $weekly_pay = $hours * $rate + (($hours - 40) * ($rate * 2));
    }
    
    echo "You made \${$weekly_pay} this week <br>"
?>