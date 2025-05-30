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
        setcookie("teams", $teams, time() + (86400 * 100), "/");
    } else {
        $teams = $_COOKIE["teams"];
        $array = explode(" ", $teams);
    }

    function names(){
        foreach(explode(" ", $_COOKIE["teams"]) as $name){
            echo "<form action='teamGenerator.php' method='post'>
                    <input type='submit' name='user' value='$name'></from><br>";
        }
    }    

    if(isset($_POST["add"])){
        if(!empty($_POST["name"])){

            $new = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
            array_push($array, $new);
            $teams = implode(" ", $array);
            setcookie("teams", $teams, time() + (86400 * 100), "/");
            echo"{$new} added<br>";
        } else {
            echo"Enter a name <br>";
        }
        names();
    }
    
// delete
    if(isset($_POST["user"])){
        $array = explode(" ", $teams);
        $array = array_diff($array, [$_POST["user"]]);
        $teams = implode(" ", $array);
        setcookie("teams", $teams, time() + (86400 * 100), "/");
        echo"{$_POST["user"]} removed";
        names();
    }
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <hr>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <input type="submit" value="Generate Teams">
    </form>
</body>
</html>