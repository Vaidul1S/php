<?php
    //functions

    function song($name, $age){
        echo"Happy Birthday dear {$name}! <br>";
        echo"Happy Birthday to you! <br>";
        echo"Happy Birthday dear {$name}! <br>";
        echo"Happy Birthday to you! <br>";
        echo"{$name}, You $age years old Bro! <br><br>";
    }

    song("Emi", 27);
    song("Gary", 115);

    function is_even($number) {
        $result = $number % 2;
        return $result;
    }

    echo is_even(15) . "<br>";

    function hypotenuse(float $a, float $b) {
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    echo hypotenuse("15", 33) . "<br>";

?>