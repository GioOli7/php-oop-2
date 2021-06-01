<?php

class Product {
    protected $brand;
    protected $price;

    // CONSTRUCT
    function __construct($_brand,  $_price) {
        $this->brand = $_brand;
        $this->price = $_price;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getPrice() {
        return $this->price;
    }

}

class Surgelato extends Product {
    protected $negativeStoringTemp;

    // CONSTRUCT
    function __construct($_brand, $_price, $_negativeStoringTemp) {
        parent::__construct($_brand, $_price);
        $this->negativeStoringTemp = $_negativeStoringTemp;
    }

    public function getPrice() {
        return $this->price * 1.10;
    }

    public function getTemp() {
        return $this->negativeStoringTemp;
    }
}

class Fruit extends Product {
    protected $maxStoringDays;

     // CONSTRUCT
    function __construct($_brand, $_price, $_maxStoringDays) {
        parent::__construct($_brand, $_price);
        $this->maxStoringDays = $_maxStoringDays;
    }

    public function getPrice() {
        return $this->price * 1.20;
    }

    public function getStoringDays() {
        return $this->maxStoringDays;
    }
}