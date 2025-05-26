<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Methods</title>
</head>

<body>
    <!-- <form action="index.php" method="post">
        <label>username:</label>
        <input type="text" name="username">
        <label>password:</label>
        <input type="password" name="password">
        <input type="submit" value="Log in">
    </form> -->
    <form action="index.php" method="post">        
        <label>quantity:</label>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>

</html>

<?php
    // $_GET $_POST     -  get per quary (url), post - saugesnis, uzklausos dydis neribotas
    // echo $_POST["username"] . "<br>";
    // echo $_POST["password"] . "<br>";

    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;

    echo"You have ordered {$quantity} x {$item}'s<br>";
    echo"Your total is: \${$total}";
?>