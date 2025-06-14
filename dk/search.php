<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usersearch = $_POST["usersearch"];
    
    try {
        require_once "db.inc.php";
        $query = "SELECT * FROM comments WHERE user = :usersearch;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usersearch", $usersearch);

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
            echo "<h4>" . htmlspecialchars($row["user"]) . "</h4>";
            echo "<p>" . htmlspecialchars($row["text"]) . "</p>";
            echo "<p>" . htmlspecialchars($row["reg_date"]) . "</p>";            
        }      
    }
    ?>
    <form action="index.php" method="post">                  
        <button>Go Home</button>
    </form>
</body>
</html>