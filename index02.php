<?php
    // arithmetics   

    // + - * / ** %
    $x = 15;
    $y = 7;
    $z = null;

    $z = $x + $y;
    echo "{$z} <br>";

    $z = $x - $y;
    echo "{$z} <br>";

    $z = $x * $y;
    echo "{$z} <br>";

    $z = $x / $y;
    echo "{$z} <br>";

    $z = $x ** $y;                          // ** kelimas laipsniu x^y;
    echo "{$z} <br>";

    $z = $x % $y;
    echo "{$z} <br>";                       //liekana
    
    $counter = 10;
    
    $counter = $counter + 1;
    echo "$counter <br>";
    $counter+=3;
    echo "$counter <br>";

    $total = 1 + 2 - 3 * 4 / 5 ** 6;        //veiksmai kaip matematikoj
    echo "$total <br>";


?>
