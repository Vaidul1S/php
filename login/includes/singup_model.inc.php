<?php

declare(strict_types=1);

function get_username(object $pdo, string $username){
    $query = "SELECT username FROM planets WHERE user = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result =$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}