<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        require_once 'db.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_control.inc.php';

        //Error handlers
        $errors = [];
        if(is_input_empty($username, $password)) {
            $errors["empty_input"]= "Fill in all field!";
        }
        if(is_username_taken($pdo, $username)) {
            $errors["username_taken"]= "Username already taken!";            
        }

        require_once 'config_session.inc.php';

        if($errors){
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../index.php");
        }

        create_user();
        
    } catch (PDOException $e) {
        die("Querry failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}



















http://localhost/website/login/index.php