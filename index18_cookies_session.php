<?php
    //cookie
    //86400 is 1 day in seconds

    setcookie("cookie_name", "cookie_body", time() + (86400 * 1), "/");         
    setcookie("food", "pizza", time() + (86400 * 2), "/");         
    setcookie("meow", "ella ranger", time() + (86400 * 3), "/");         

    
    foreach($_COOKIE as $key => $value){
        echo"<p>Cookie key: {$key}, value: {$value} </p>";
    }

    if(isset($_COOKIE["food"])){
        echo"<p>Buy some {$_COOKIE["food"]}!</p>";
    } else {
        echo"<p>There is no cookie.</p>";
    }

    // session

    require_once 'dk/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Session</title>
</head>
<body>
    <h2>This is a login page</h2>
    <p><a href="/website/components17/home.php">Home</a></p>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        Username: <br>
        <input type="text" name="username"><br>
        Password: <br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){
        
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
           
            header("Location: components17/home.php");
        } else {
            echo "Missing username/password <br>";
        }
    }
   
?>