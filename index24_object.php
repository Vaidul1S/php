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

echo "<p>{$car01->getBrand()}</p>";
$car01->setBrand("Subaru");
echo "<p>{$car01->getBrand()}</p>";
$car01->setColor('black');
echo "<p>{$car01->getColor()}</p>";
echo "<p>{$car01->getYear()}</p>";

?>

<form action="Classes/includes/signup.inc.php" method="post">
        Username: <br>
        <input type="text" name="username"><br>
        Password: <br>
        <input type="password" name="password"><br>
        <button>Signup</button>
</form>


</body>
</html>