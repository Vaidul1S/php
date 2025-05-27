<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter your number</label>
        <input type="text" name="counter">
        <input type="submit" value="Start">
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>

<?php
    // for loop
    $counter = $_POST["counter"];

    for ($i=$counter; $i >= 0; $i--) { 
        echo $i . "<br>";
    }

    // while loop

    $seconds = 0;
    $running = true;

    while ($running) {
        //wait 1 second
        if(isset($_POST["stop"])){
            $running = false;
        } else {
            $seconds++;
            echo $seconds . "<br>";
        }
        
    }
?>