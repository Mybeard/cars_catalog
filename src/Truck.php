<?php

namespace App;

class Truck extends AbstractCar
{
    private $capacity;

    public function __construct($brand, $year, $model, $vin, $capacity)
    {
        parent::__construct($brand, $year, $model, $vin);
        $this->capacity = $capacity;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }
}
