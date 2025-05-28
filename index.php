<?php
    //cookie
    //86400 is 1 day in seconds

    setcookie("cookie_name", "cookie_body", time() + (86400 * 0), "/");         
    setcookie("food", "pizza", time() + (86400 * 0), "/");         
    setcookie("meow", "ella ranger", time() + (86400 * 0), "/");         

    
    foreach($_COOKIE as $key => $value){
        echo"{$key} = {$value} <br>";
    }

    if(isset($_COOKIE["food"])){
        echo"Buy some {$_COOKIE["food"]} !";
    } else {
        echo"There is no cookie.";
    }
?>
