<?php

class Car {
    // Properties / Fields
    private $brand;                // private info tik sitai klasei ir nepereina subklasem
    private $color;                // protected info pereina sub klasem
    private $year;                 // public info visiems, default turetu but private visiems
    public $vehicleType = "car";
    
    // Constrtuctor
    public function __construct($brand, $color = "white", $year = "1970") {
        $this->brand = $brand;
        $this->color = $color;
        $this->year = $year;
    }

    // Getter / Setter
    public function getBrand(){
        return $this->brand;
    } 
    public function setBrand($brand){
        $this->brand = $brand;
    } 

    public function getColor(){
        return $this->color;
    } 
    public function setColor($color){
        $allowedColors = [
            "red",
            "blue",
            "green",
            "yellow"
        ];
        if (in_array($color, $allowedColors)){
            $this->color = $color;
        }        
    } 

    public function getYear(){
        return $this->year;
    } 
    public function setYear($year){
        $this->year = $year;
    } 

    // Method
    function getCarInfo(){
        return "Brand: " . $this->brand . ", Color: " . $this->color . ", Year:" . $this->year;
    }


}

// $car01 = new Car("Mercedes Benz", "silver", "1964");
// $car02 = new Car("Volkswagen", "dark gray", "2000");
// $car03 = new Car("BMW");

// echo $car01->vehicleType . "<br>";           //rodys per browseri nes public 
// echo var_dump($car02);
// echo "<p>{$car01->getCarInfo()}</p>";