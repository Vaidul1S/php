<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator</title>
</head>
<body>
    <h2>Welcome to Team Generator</h2>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        Add name:
        <input type="text" name="name">
        <input type="submit" name="add" value="Add">
    </form>
</body>
</html>
<?php
    $teams = array();

    if(isset($_POST["add"])){
        if(!empty($_POST["name"])){
            array_push($teams, "{$_POST["name"]}");
        } else {
            echo"Enter a name";
        }
    }
    
    foreach($teams as $name){
        echo"{$name}<br>";
    }
?>