<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $pwd = $_POST["password"];

    try {
        require_once "db.inc.php";
        $query = "INSERT INTO planets (user, password) 
                VALUES (:user, :pwd);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":user", $username);
        $stmt->bindParam(":pwd", $pwd);

        // $stmt->execute([$username, $pwd]);               // naudojam kai VALUES(?, ?)
        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: index.php");
        die();
        
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}else{
    header("Location: index.php");
}