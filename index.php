<?php
    //cookie
    //86400 is 1 day in seconds

    setcookie("cookie_name", "cookie_body", time() + (86400 * 1), "/");         
    setcookie("food", "pizza", time() + (86400 * 2), "/");         
    setcookie("meow", "ella ranger", time() + (86400 * 3), "/");         

    
    foreach($_COOKIE as $key => $value){
        echo"{$key} = {$value} <br>";
    }

    if(isset($_COOKIE["food"])){
        echo"Buy some {$_COOKIE["food"]} !";
    } else {
        echo"There is no cookie.";
    }

    //session

    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    This is a login page<br>
    <a href="/website/components17/home.php">Home</a>
</body>
</html>
<?php
    $_SESSION["username"] = "Gawon";
    $_SESSION["password"] = "123";

    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";
?>