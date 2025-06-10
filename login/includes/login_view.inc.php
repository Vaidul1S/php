<?php

declare(strict_types=1);

function output_username(){
    if(isset($_SESSION["user_id"])){
        echo "Your are logged in as " . $_SESSION["user_username"];  
    } else {
        echo "Please login";
    }
}

function check_login_errors(){
    if(isset($_SESSION["errors_login"])){
        $errors = $_SESSION["errors_login"];

        echo "<br>";

        foreach($errors as $error){
            echo "<p class='form_error'>" .$error . "</p>";
        }

        unset($_SESSION["errors_login"]);
    } elseif(isset($_GET["login"]) && $_GET["login"] === "success"){

        echo "<p class='form_success'>Signup success!</p>";
    }
}