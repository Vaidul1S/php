<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Generator</title>
</head>
<body>
    <h2>Welcome to Team Generator</h2>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Add name:
        <input type="text" name="name">
        <input class="buttonT" type="submit" name="add" value="Add">
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
                    <input class='teammate' type='submit' name='user' value='$name'></from>";
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
        echo "<hr>";
    }
    
    
// delete
    if(isset($_POST["user"])){
        $array = explode(" ", $teams);
        $array = array_diff($array, [$_POST["user"]]);
        $teams = implode(" ", $array);
        setcookie("teams", $teams, time() + (86400 * 100), "/");
        echo"{$_POST["user"]} removed";
        names();
        echo "<hr>";
    }

    
        
?>
<!DOCTYPE html>
<body>     
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <input class="buttonT" type="submit" name="generate" value="Generate Teams">
    </form>
</body>
</html>
<?php
    function generate(){
        if(isset($_POST["generate"])){
            $teams = $_COOKIE["teams"];
            $array = explode(" ", $teams);
            shuffle($array);
            $i=0;
            $size=2;
            foreach($array as $key => $name){
                if($key % $size){
                    echo "{$name}<br>";
                }else{
                    $i++;
                    echo "<br><div class='team'>Team {$i}</div>" . $name . "<br>";
                }                
            }
        }
    }

    generate();
    
?>
