<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object</title>
</head>
<body>
    
<?php

$brand = "Mercedes Benz";
$color = "Silver";
$year = "1956";

function getCarInfo($brand, $color, $year){
    return "Brand: " . $brand . ", Color: " . $color . ", Year:" . $year;
}

echo getCarInfo($brand, $color, $year);

?>

</body>
</html>