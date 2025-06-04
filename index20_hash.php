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

    //DK simple hashing
    $sensitiveData = "Meovv";

    $salt = bin2hex(random_bytes(16));
    $pepper = "ASecretPepperSring";

    echo "<p>Salt: {$salt}</p>";

    $dataToHash = $sensitiveData . $salt . $pepper;
    $hash2 = hash("sha256", $dataToHash);

    echo "<p>Hash2: {$hash2}</p>";

    $storedSalt = $salt;
    $storedHash2 = $hash2;
    $pepper = "ASecretPepperSring";

    $dataToHash = $sensitiveData . $salt . $pepper;

    $verificationHash = hash("sha256", $dataToHash);

    if($storedHash2 ===$verificationHash){
        echo "<p>The data are the same!</p>";
        echo "<p>{$storedHash2}</p>";
        echo "<p>{$verificationHash}</p>";
    }else {
        echo "<p>The data aren't the same!</p>";
    }


    $pwd = "123";

    $options = [                                // hashinimo sudetingumas reikalauja resursu
        'cost' => 12
    ];

    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $pwdLogin = "123";

    if (password_verify($pwdLogin, $hashedPwd)){
        echo "<p>The password is the same!</p>";
    } else {
        echo "<p>The password ain't the same!</p>";
    }
?>