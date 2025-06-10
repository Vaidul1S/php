<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        require_once 'db.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_control.inc.php';

        //Errror handlers
        $errors = [];
        if(is_input_empty($username, $password)) {
            $errors["empty_input"]= "Fill in all fields!";
        }        

        $result = get_user($pdo, $username);

        if(user_doesnt_exists($result)){
            $errors["login_incorrect"]= "User not found!";
        }

        require_once 'config_session.inc.php';

        if($errors){
            $_SESSION["errors_signup"] = $errors;
            $signup_data = [
                'username' => $username    
            ];
            $_SESSION["signup_data"] = $signup_data;
            header("Location: ../index.php");
            die();
        }
    } catch (PDOException $e) {
        die("Querry failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}