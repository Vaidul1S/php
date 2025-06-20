<?php
    require_once 'includes/config_session.inc.php';
    require_once 'includes/signup_view.inc.php';
    require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Login Site</title>
</head>
<body>
    <h2><?php output_username() ?></h2>

    <?php
        if(!isset($_SESSION["user_id"])){
    ?>
        <h2>Login</h2>
        <form action="./includes/login.inc.php" method="post">
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>        
            <button>Login</button>
        </form>
    <?php
    }
    ?>
    
    <?php check_login_errors(); ?>

    <?php
        if(!isset($_SESSION["user_id"])){
    ?>
        <h2>Signup</h2>
        <form action="./includes/signup.inc.php" method="post">
            <?php signup_inputs(); ?> 
            <button>Signup</button>
        </form>
    <?php
    }
    ?>
        
    <?php check_signup_errors(); ?>

    <?php
        if(isset($_SESSION["user_id"])){
    ?>
        <h2>Logout</h2>
        <form action="./includes/logout.inc.php" method="post">                
            <button>Logout</button>
        </form>
    <?php
    }
    ?>
    

</body>
</html>



<!-- http://localhost/website/login/index.php -->