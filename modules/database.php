<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "users";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
        echo"You are connected!<br>";
    }
    catch(mysqli_sql_exception){
        echo"Could not connected!<br>";
    }

?>