<?php

echo"singup";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
} else {
    header("Location: ../index.php");
}



















http://localhost/website/login/index.php