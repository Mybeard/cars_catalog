<?php

namespace App;

class Car extends AbstractCar
{
    private $package;

    public function __construct($brand, $year, $model, $vin, $package)
    {
        parent::__construct($brand, $year, $model, $vin);
        $this->package = $package;
    }


    public function getPackage()
    {
        return $this->package;
    }

    public function setPackage($package)
    {
        $this->package = $package;
    }
}
