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
        if(!user_doesnt_exists($result) && is_pwd_wrong($password, $result["password"])){
            $errors["login_incorrect"]= "Check username or password!";
        }

        require_once 'config_session.inc.php';

        if($errors){
            $_SESSION["errors_signup"] = $errors;
            
            header("Location: ../index.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);

        $_SESSION['last_regeneration'] = time();

        header("Location: ../index.php?login=success");

        $pdo = null;
        $stmt = null;
        die();
        
    } catch (PDOException $e) {
        die("Querry failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}