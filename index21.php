<?php
    // database
    include("components17/database.php");
    
    $username = "Anna";
    $password = "123";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO planets (user, password)
    VALUES ('$username', '$hash')";


    try{
        mysqli_query($conn, $sql);
        echo"User is now registred <br>";
    }
    catch(mysqli_sql_exception){
        echo"Could not register user <br>";
    }

    mysqli_close($conn);


?>
