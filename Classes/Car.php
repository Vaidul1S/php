<?php

class Car {
    //Properties / Fields
    private $brand;                // private info tik sitai klasei ir nepereina subklasem
    private $color;                // protected info pereina sub klasem
    private $year;                 // public info visiems, default turetu but private visiems
    private $vehicleType = "car";
    //Constrtuctor

    public function __construct($brand, $color, $year) {
        
    }
}