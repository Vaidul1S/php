<?php
    // hashing

    $password = "123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo "{$hash}<br>";
   
    if(password_verify("123", $hash)){
        echo"You are logged in <br>";
    } else {
        echo"Incorect password <br>";
    }
?>