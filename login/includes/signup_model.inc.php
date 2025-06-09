<?php

declare(strict_types=1);

function get_username(object $pdo, string $username){
    $query = "SELECT user FROM planets WHERE user = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result =$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $username, string $password) {
    $query = "INSERT INTO planets (user, password) VALUE (:username, :pwd)";
    $stmt = $pdo->prepare($query);
    $options = [
        'cost' => 12
    ];
    $hashedPwd = password_hash($password, PASSWORD_BCRYPT, $options);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $hashedPwd);
    $stmt->execute();

}