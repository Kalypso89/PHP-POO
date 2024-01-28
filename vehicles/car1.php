<?php

class Car1
{
    public $brand;
    public $color;
    private $owner;
    protected $city;
    private $delivery;

    function __construct($brand, $color, $owner = "car dealer")
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->owner = $owner;
    }

    public function setOwnerData($owner, $city, $delivery)
    {
        $this->owner = $owner;
        $this->city = $city;
        $this->delivery = $delivery;
    }
};

$myCar = new Car1("Fiat 500", "black");

echo $myCar->brand;
echo $myCar->color;
var_dump($myCar);

$myCar->setOwnerData("Ángela", "Oviedo", "Your $myCar->color $myCar->brand has just arrived to our factory");
var_dump($myCar);
