<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usersearch = $_POST["usersearch"];
    
    try {
        require_once "db.inc.php";
        $query = "SELECT comments.*, users.username 
            FROM comments
            JOIN users ON comments.user_id = users.id
            WHERE users.username LIKE :search;";

        $stmt = $pdo->prepare($query);

        $stmt->bindValue(":search", "%" . $usersearch . "%", PDO::PARAM_STR);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;
        
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}else{
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h3>Search Results</h3>
    <?php
    if(empty($results)){
        echo"<div><p>No results!</p></div>";
    }else{
        foreach($results as $row){
            echo "<h4>" . htmlspecialchars($row["username"]) . " (ID: " . htmlspecialchars($row["user_id"]) . ")</h4>";
            echo "<p>" . htmlspecialchars($row["text"]) . "</p>";
            echo "<p>" . htmlspecialchars($row["date"]) . "</p>";            
        }      
    }
    ?>
    <form action="index.php" method="post">                  
        <button>Go Home</button>
    </form>
</body>
</html>