<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathametics</title>
</head>

<body>    
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">        
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
    // Mathametics

    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    $total = abs($x);                                           //absolute - modulis

    echo "x lygu: {$x} y lygu: {$y} z lygu: {$z} <br>";
    echo "x modulis: " . $total . "<br>";
   
    $total = round($x);                                         //apvalinimas
    echo "x round: " . $total . "<br>";
    
    $total = floor($x);                                         //round down
    echo "x round down: " . $total . "<br>";

    $total = ceil($x);                                          //round up
    echo "x round up: " . $total . "<br>";

    $total = sqrt($x);                                          //saknis is x
    echo "square root of x: " . $total . "<br>";                

    $total = pow($x, $y);                                       //x^y
    echo "power: " . $total . "<br>";                           

    $total = max($x, $y, $z);                                   //isrenkam didziausia
    echo "highhest number: " . $total . "<br>";     
    
    $total = min($x, $y, $z);                                   //isrenkam maziausia
    echo "lowest number: " . $total . "<br>";     
   
    $total = pi();                                              //skaicius pi 3.14
    echo "pi: " . $total . "<br>";   

    $total = rand(1, 99);
    echo "rand number: " . $total . "<br>";

    echo date("Y-m-d H:i:s") . "<br>";

    echo time() . "<br>";                                        //sekundes nuo 1970 01 01

    $date = "1970-01-01 01:00:01";                               // tipo mano laiko zona gmt+1
    echo strtotime($date) . "<br>";
?>