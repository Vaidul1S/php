<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>   
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        Username: <br>
        <input type="text" name="username"><br>
        Password: <br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
    // $_SERVER

    foreach($_SERVER as $key => $value){
        echo"{$key} --- {$value} <br>";
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo"------------------------------Yellow------------------------------";
    }
   
?>