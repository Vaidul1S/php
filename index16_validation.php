<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        Username:
        <input type="text" name="username"><br>
        Age:
        <input type="text" name="age"><br>
        email:
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
    //usefull functions

    if(isset($_POST["login"])){
        //validacija

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        if(empty($age)){
            echo"Enter valid age <br>";
        } else {
            echo " {$age}<br>";
        }
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        if(empty($age)){
            echo"Enter valid email <br>";
        } else {
            echo " {$email}<br>";
        }

        //filravimas

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);    //injections proff
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);                 //injections proff
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);                  //injections proff

        echo "Hello {$username}";
        echo " {$age}";
        echo " {$email}";
    }

?>