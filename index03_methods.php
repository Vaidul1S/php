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
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">        
        <label>quantity:</label>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>

</html>

<?php
    // REQUEST METHODS

    // $_GET $_POST     -  get per quary (url), post - saugesnis, uzklausos dydis neribotas
    // $_REQUEST - ima is kur tik gali get, post, cookie
    // echo $_POST["username"] . "<br>";
    // echo $_POST["password"] . "<br>";

    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;

    echo"You have ordered {$quantity} {$item}'s<br>";
    echo"Your total is: \${$total}<br>";
    echo "Request: " . $_REQUEST["quantity"];

?>