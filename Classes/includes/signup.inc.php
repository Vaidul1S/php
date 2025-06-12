<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once "../Dbh.php";
    require_once "../Signup.php";

    $signup = new Signup($username, $password);
    $signup->signupUser();
}