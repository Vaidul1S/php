<?php
    // database
    include("modules/database.php");
    
    
    $sql = "SELECT * FROM planets";
    $result = mysqli_query($conn, $sql);


    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row["id"] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["role"] . "<br>";
            }    
        } else {
        echo"There is no member in Meovv with this name";
        }


    // try{
    //     mysqli_query($conn, $sql);
    //     echo"User is now registred <br>";
    // }
    // catch(mysqli_sql_exception){
    //     echo"Could not register user <br>";
    // }

    mysqli_close($conn);


?>
