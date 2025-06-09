<?php

declare(strict_types=1);

function signup_inputs(){    
    
    if(isset($_SESSION["signup_data"]["username"]) && 
    !isset($_SESSION["errors_signup"]["username_taken"])){
        echo '<input type="text" name="username" placeholder="Username" 
        value="'.$_SESSION["signup_data"]["username"].'"><br>';             // butu email rasytume sita sumustini emailui
    } else {
        echo'<input type="text" name="username" placeholder="Username"><br>';
    }
    echo '<input type="password" name="password" placeholder="Password"><br>';
}

function check_signup_errors() {
    if(isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];

        echo "<br>";

        foreach($errors as$error) {
            echo "<p class='form_error'>" .$error . "</p>";
        }

        unset($_SESSION["errors_signup"]);
    } elseif(isset($_GET["signup"]) && $_GET["signup"] === "success") {

        echo "<p class='form_success'>Signup success!</p>";
    }
}