<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Database</title>
</head>
<body>
    <form action="formHandler.inc.php" method="post">
        <h2>Welcome to Fakebook</h2>
        Username:
        <input type="text" name="username"><br>
        Password:
        <input type="password" name="password"><br>        
        <button>Sign Up</button>
    </form>

    <form action="update.inc.php" method="post">
        <h3>Update account</h3>
        Username:
        <input type="text" name="username"><br>
        Password:
        <input type="password" name="password"><br>        
        <button>Update</button>
    </form>

    <form action="delete.inc.php" method="post">
        <h3>Delete account</h3>
        Username:
        <input type="text" name="username"><br>
        Password:
        <input type="password" name="password"><br>        
        <button>Delete</button>
    </form>

     <form action="search.php" method="post">
        <h3>Search</h3>
        Username:
        <input type="text" name="usersearch"><br>            
        <button>Search</button>
    </form>
</body>
</html>