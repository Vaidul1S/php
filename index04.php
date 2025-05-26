<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Methods</title>
</head>

<body>    
    <form action="index.php" method="post">        
        <label>x:</label>
        <input type="text" name="x">
        <label>y:</label>
        <input type="text" name="y">
        <label>z:</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>
</body>

</html>

<?php
    // $_GET $_POST     -  get per quary (url), post - saugesnis, uzklausos dydis neribotas

    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    $total = abs($x);

    echo "x lygu: {$x} y lygu: {$y} z lygu: {$z} <br>";
    echo "x modulis: " . $total . "<br>";
   
    $total = round($x);
    echo "x round: " . $total . "<br>";
    
    $total = floor($x);                     //round down
    echo "x round down: " . $total . "<br>";

    $total = ceil($x);                     //round up
    echo "x round up: " . $total . "<br>";

    $total = sqrt($x);
    echo "square root of x: " . $total . "<br>";       //saknis is x

    $total = pow($x, $y);
    echo "power: " . $total . "<br>";       //x^y

    $total = max($x, $y, $z);
    echo "highhest number: " . $total . "<br>";     
    
    $total = min($x, $y, $z);
    echo "lowest number: " . $total . "<br>";     
   
    $total = pi();
    echo "pi: " . $total . "<br>";   

    $total = rand(1, 99);
    echo "rand number: " . $total . "<br>";

?>