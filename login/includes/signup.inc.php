<?php

echo"singup";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        require_once 'db.inc.php';
        require_once 'singup_model.inc.php';
        require_once 'singup_control.inc.php';

        if(is_input_empty($username, $password)) {

        }
        if(is_username_taken($pdo, $username)) {
            
        }
        

    } catch (PDOException $e) {
        die("Querry failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}



















http://localhost/website/login/index.php