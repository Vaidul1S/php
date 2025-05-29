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
    <hr>
</body>
</html>
<?php
    if(!isset($_COOKIE["teams"])){
        $teams = "";
        $array = array();
        setcookie("teams", $teams, time() + (86400 * 10), "/");
    } else {
        $teams = $_COOKIE["teams"];
        $array = explode(" ", $teams);
    }

    if(isset($_POST["add"])){
        if(!empty($_POST["name"])){
            array_push($array, "{$_POST["name"]}");
            $teams = implode(" ", $array);
            setcookie("teams", $teams, time() + (86400 * 10), "/");
        } else {
            echo"Enter a name <br>";
        }
    }

    if(isset($_COOKIE["teams"])){
        foreach(explode(" ", $_COOKIE["teams"]) as $name){
            echo "<input type='submit' name='user' value='$name'><br>";
        }
    } else {
        echo"There is no cookie. <br>";
    }
    
    if(isset($_POST["user"])){
        $array = explode(" ", $teams);
        $array = array_diff($array, [$_POST["user"]]);
        echo $_POST["user"];
        $teams = implode(" ", $array);
        setcookie("teams", $teams, time() + (86400 * 10), "/");
    }
?>