<?php
    //usefull functions

    $username = "Grace Lyra";
    $phone = "123-456-7890";

    $firstname = substr($username, 0, 6); 
    $lastname = substr($username, 6); 
    $fullname = explode(" ", $username);            //sumetam i array kapodami per tarpus
    $restore = implode(" ", $fullname);             //sukeliam atgal i viena stringa

    $username = strtolower($username);              //mazosios
    $username = strtoupper($username);              // didziosios
    $username = str_pad($username, 20, "-");
    $equals = strcmp($username, "Grace");           //string compare returns true(0) false (-1)
    $count = strlen($username);                     //ilgis

    $phone = str_replace("-", "", $phone);

    echo $username  . "<br>";
    echo $phone  . "<br>";
    echo $equals . "<br>";
    echo $count . "<br>";
    echo $firstname . "<br>";
    echo $lastname . "<br>";
    
    foreach ($fullname as $name){
        echo $name . "<br>";
    }

    echo $restore . "<br>";

?>