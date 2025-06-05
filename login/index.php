<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Login Site</title>
</head>
<body>
    <h2>Login</h2>
    <form action="./includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>        
        <button>Login</button>
    </form>

    <h2>Signup</h2>
    <form action="./includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>        
        <button>Signup</button>
    </form>

</body>
</html>