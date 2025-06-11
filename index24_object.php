<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object</title>
</head>
<body>
    
<?php

require_once "Classes/Car.php";

$car01 = new Car("Toyota");

echo $car01->getBrand();

?>

</body>
</html>