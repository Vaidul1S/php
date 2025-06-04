<?php
    // hashing

    $password = "123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo "<p>{$hash}</p>";
   
    if(password_verify("123", $hash)){
        echo"<p>You are logged in </p>";
    } else {
        echo"<p>Incorect password </p>";
    }

    $sensitiveData = "Meovv";

    $salt = bin2hex(random_bytes(16));
    $pepper = "ASecretPepperSring";

    echo "<p>Salt: {$salt}</p>";

    $dataToHash = $sensitiveData . $salt . $pepper;
    $hash2 = hash("sha256", $dataToHash);

    echo "<p>Hash2: {$hash2}</p>";

    $storedSalt = $salt;
    $storesHash2 = $hash2;
    $pepper = "ASecretPepperSring";

    $dataToHash = $sensitiveData . $salt . $pepper;

    $verificationHash = hash("sha256", $dataToHash);

    if($storesHash2 ===$verificationHash){
        echo "<p>The data are the same!</p>";
    }else {
        echo "<p>The data aren't the same!</p>";
    }
?>