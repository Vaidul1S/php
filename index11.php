<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label>username:</label>
        <input type="text" name="username"><br>
        <label>password:</label>
        <input type="password" name="password">
        <input type="submit" name="login" value="Log in">
    </form>
</body>
</html>
<?php
    // functions
    // isset() returns true if a variable is declared and not null
    // empty() returns true if a variable is not declared, false, null, ""
   
    $username = "Grace";

    if (isset($username)) {
        echo"Variable is set <br>";
    } else {
        echo"Variable is NOT set <br>";
    }

    $username = ""; 

    if (empty($username)) {
        echo"Variable is empty <br>";
    } else {
        echo"Variable is NOT empty <br>";
    }

    foreach($_POST as $key => $value){
        echo"{$key} = {$value}<br>";
    }

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        if(empty($username)){
            echo"username is missing";
        } elseif (empty($password)){
            echo"password is missing";
        } else {
            echo"Hello {$username}";
        }
    }

?>