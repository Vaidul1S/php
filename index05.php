<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Methods</title>
</head>

<body>    
    <form action="index.php" method="post">        
        <label>Radius:</label>
        <input type="text" name="radius">        
        <input type="submit" value="calc">
    </form>
</body>

</html>

<?php
    // $_GET $_POST     -  get per quary (url), post - saugesnis, uzklausos dydis neribotas

    $radius = $_POST["radius"];
    $perimet = null;
    $area = null;
    $volume = null;

    $perimet = 2 * pi() * $radius;
    $perimet = round($perimet, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo "Perimeter = {$perimet} cm <br>";
    echo "Area = {$area} cm2 <br>";
    echo "Volume = {$volume} cm3 <br>";  

?>