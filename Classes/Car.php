<?php

class Car {
    //Properties / Fields
    private $brand;                // private info tik sitai klasei ir nepereina subklasem
    private $color;                // protected info pereina sub klasem
    private $year;                 // public info visiems, default turetu but private visiems
    public $vehicleType = "car";
    
    //Constrtuctor
    public function __construct($brand, $color = "white", $year = "1970") {
        $this->brand = $brand;
        $this->color = $color;
        $this->year = $year;
    }

    //Method
    function getCarInfo(){
        return "Brand: " . $this->brand . ", Color: " . $this->color . ", Year:" . $this->year;
    }


}

$car01 = new Car("Mercedes Benz", "silver", "1964");
$car02 = new Car("Volkswagen", "dark gray", "2000");
$car03 = new Car("BMW");

echo $car01->vehicleType;           //rodys per browseri nes public 