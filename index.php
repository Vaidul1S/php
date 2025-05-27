<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio buttons</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="pizza">Pizza<br>
        <input type="checkbox" name="foods[]" value="apple">Apple<br>
        <input type="checkbox" name="foods[]" value="cookie">Cookie<br>        
        <input type="checkbox" name="foods[]" value="orange">Orange<br>        
        <input type="checkbox" name="foods[]" value="blueberry">Blueberry<br>        
        <input type="submit" name="Order" value="Order">
    </form>
</body>
</html>
<?php
    //checkboxes

    if (isset($_POST["Order"])){
        $foods = $_POST["foods"];
        
        foreach($foods as $food){
            echo $food . ", ";
        }
        
    }
?>