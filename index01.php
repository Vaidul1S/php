<?php
    echo "I love pizza too <br>";
    echo "I love pizza too again <br>";
    // thtis is comment
    /* 
        this is a 
        multiline comment
        */

    //strings
    $vardas = "Emi";
    $food = "pizza";
    $email = "example@example.com";
    //numbers
    $age = 27;
    $users = 5;
    $quantity = 4;
    //number floats
    $gpa = 2.5;
    $price = 5.99;
    $taxRate = 9.2;
    //booleen
    $employed = true;
    $online = false;
    $for_sale = true;

    $total = null;

    echo "Hello {$vardas} <br>";
    echo "{$vardas} likes {$food} <br>";
    echo "{$vardas} has an email {$email} <br>";

    echo "{$vardas} is {$age} years old<br>";
    echo "There are {$users} online<br>";
    echo "{$vardas} have ordered {$quantity} {$food}s<br>";

    echo "Your gpa is {$gpa}<br>";
    echo "Your {$food} is \${$price}<br>";               // \$ - kitaip klaida, preseeding
    echo "The sale tax rate is {$taxRate}%<br>";

    echo "Online status: {$online}<br>";                 // false yra 0 ir nerodomas
    echo "Pizza is for sale: {$for_sale}<br>";           //true yra 1

    echo "{$vardas} have ordered {$quantity} {$food}s<br>";
    $total = $quantity * $price;
    echo "{$vardas}'s total is \$S{$total}<br>";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <button>Order pizza</button>
</body>

</html>