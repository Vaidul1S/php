<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    Welcome home <br>
    <a href="/website/index18.php">Index</a><br>
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
        header("Location: ../index18.php");
    }
?>