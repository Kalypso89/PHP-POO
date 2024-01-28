<?php

class Car2
{
    public $brand;
    public $color;
    private $owner;
    protected $city;

    function setBrand($brand)
    {
        $this->brand = $brand;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    private function setOwner($owner)
    {
        $this->owner = $owner;
    }

    protected function setCity($city)
    {
        $this->city = $city;
    }

    public function setOwnerData($owner, $city)
    {
        $this->owner = $owner;
        $this->city = $city;
    }
};

$myCar = new Car2();

$myCar->setBrand("Fiat 500");
echo $myCar->brand;

$myCar->setColor("black");
echo $myCar->color;

$myCar->setOwnerData("Ángela", "Oviedo");
var_dump($myCar);
