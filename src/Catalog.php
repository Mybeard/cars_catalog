<?php

namespace App;

class Catalog
{
    private $car_catalog = [];

    public function getCarCatalog()
    {
        return $this->car_catalog;
    }

    public function setCarCatalog($car)
    {
        $this->car_catalog[] .= \serialize($car);
    }

    public function print_catalog()
    {
        foreach ($this->car_catalog as $car) {
            echo $car . \PHP_EOL;
        }
    }
}
