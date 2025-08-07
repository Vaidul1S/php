<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Home</title>
</head>
<body>
    <h2>Welcome home</h2>
    <p><a href="/index18_cookies_session.php">Go back to Login</a></p>
    <form action="home.php" method="post">
        <input type="submit" value="Logout" name="logout">
    </form>
</body>
</html>
<?php
    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";

    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: /index18_cookies_session.php");
    }
?>